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
                    'url' => 'https://drive.google.com/file/d/1Pz3mzMs5c4rTbU3LdpTFwttJrvKq6fT7/view?usp=sharing'

                ],
                [
                    'name' => 'On-the-Job-Training Completion',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2025',
                    'url' => 'https://drive.google.com/file/d/16QHH1qx2Eqy5qsfyx9s_WqUVMiZoaWkD/view?usp=sharing'
                ],
                [
                    'name' => 'ACLC Coding Bootcamp',
                    'issuer' => 'Certificate of Commendation',
                    'date' => '2025',
                    'url' => 'https://drive.google.com/file/d/1v8jduZZ0h8_fbUMrxM79aeLH9K-_3-fc/view?usp=sharing'
                ],
                [
                    'name' => 'Tabulation System Project',
                    'issuer' => 'Certificate of Recognition - Front-End Developer',
                    'date' => '2025',
                    'url' => 'https://drive.google.com/file/d/11Lg3oYrmy2gNfY0zNwGPLL9CCeMCZH1Y/view?usp=sharing'
                ],
                [
                    'name' => 'Special Community Service Awardee',
                    'issuer' => 'Certificate of Recognition',
                    'date' => '2025',
                    'url' => 'https://drive.google.com/file/d/1xFC6f5EKYE1qZ9IueL1py9rL-NUtg3yt/view?usp=sharing'
                ],
                [
                    'name' => 'Special Community Service Awardee',
                    'issuer' => 'Certificate of Recognition - (First Aider)',
                    'date' => '2025',
                    'url' => 'https://drive.google.com/file/d/1kV1WivQ3JAAkF-MP6lKXnL-BIhW2rK-r/view?usp=sharing'
                ],
                [
                    'name' => 'Service Awardee - ACLC Designer and Skilled Students Officer',
                    'issuer' => 'Certificate of Recognition',
                    'date' => '2025',
                    'url' => 'https://drive.google.com/file/d/16XYX94ok2fCsp0KmV5tUSvdfQwpaZK5v/view?usp=sharing'
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
                    'url' => 'https://drive.google.com/file/d/1GXkosBWK9-WwCkB4w8YlyMOlq_vm51cu/view?usp=sharing',
                ],
                [
                    'name' => 'Cybersecurity Sentinel Training',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2023',
                    'url' => 'https://drive.google.com/file/d/1BVi89bMkhbS75dgk0g-3o3DC8OxpHJyi/view?usp=sharing',
                ],
                [
                    'name' => 'First Aid & Basic Life Support Training',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2023',
                    'url' => 'https://drive.google.com/file/d/1p4D1GHIKDSEIDMAB-kODQ8461w7BjZKT/view?usp=sharing',
                ]
            ]
        ];
    }
}
