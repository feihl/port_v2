<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $portfolio = $this->getPortfolioData();
        return view('certificate', compact('portfolio'));
    }

    private function getPortfolioData()
    {
        return [
            'name' => 'Giuseppi Feihl Suazo',
            'title' => 'Software Developer & Tech Enthusiast',
            'location' => 'Philippines',
            'profile_image' => '/images/profile.jpg',
            'certifications' => [
                [
                    'name' => 'Best in Research Paper - Capstone',
                    'issuer' => 'Certificate of Recognition',
                    'date' => '2025',
                    'url' => '#',
                ],
                [
                    'name' => 'On-the-Job-Training Completion',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2025',
                    'url' => '#',
                ],
                [
                    'name' => 'ACLC Coding Bootcamp',
                    'issuer' => 'Certificate of Commendation',
                    'date' => '2025',
                    'url' => '#',
                ],
                [
                    'name' => 'Tabulation System Project',
                    'issuer' => 'Certificate of Recognition - Front-End Developer',
                    'date' => '2025',
                    'url' => 'https://photos.app.goo.gl/oaqjEdAzi3FHhfvS9',
                ],
                [
                    'name' => 'Service Awardee',
                    'issuer' => 'Certificate of Recognition',
                    'date' => '2025',
                    'url' => '#',
                ],
                [
                    'name' => 'ACLC Summer Coding Bootcamp',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2024',
                    'url' => '#',
                ],
                [
                    'name' => 'Cybersecurity Sentinel Examination',
                    'issuer' => 'Certificate of Recognition',
                    'date' => '2023',
                    'url' => '#',
                ],
                [
                    'name' => 'Cybersecurity Sentinel Training',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2023',
                    'url' => '#',
                ],
                [
                    'name' => 'First Aid & Basic Life Support Training',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2023',
                    'url' => '#',
                ]
            ]
        ];
    }
}