<?php

namespace App\Services;

use App\Models\Certificate;
use App\Models\Enrollment;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateService
{
    public function generateCertificate($userId, $courseId)
    {
        $enrollment = Enrollment::where('user_id', $userId)
            ->where('course_id', $courseId)
            ->first();

        if (!$enrollment) {
            throw new \Exception('Enrollment not found');
        }

        $user = $enrollment->user;
        $course = $enrollment->course;
        $certificateNumber = $this->generateCertificateNumber();
        $issueDate = now();

        // Generate PDF
        $pdf = Pdf::loadView('certificates.template', [
            'user' => $user,
            'course' => $course,
            'certificateNumber' => $certificateNumber,
            'issueDate' => $issueDate->format('d M Y'),
        ]);

        $fileName = 'certificate_' . $user->id . '_' . $course->id . '_' . time() . '.pdf';
        $filePath = 'certificates/' . $fileName;
        
        \Storage::disk('public')->put($filePath, $pdf->output());

        // Save certificate record
        return Certificate::create([
            'user_id' => $userId,
            'course_id' => $courseId,
            'certificate_number' => $certificateNumber,
            'issue_date' => $issueDate,
            'file_path' => $filePath,
            'status' => 'active',
        ]);
    }

    private function generateCertificateNumber()
    {
        return 'CERT-' . strtoupper(uniqid()) . '-' . date('Y');
    }
}
