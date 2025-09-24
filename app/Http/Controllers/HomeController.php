<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        // Sample portfolio data structure based on Bryl Lim's website
        $portfolio = [
            'name' => 'Giuseppi Feihl Suazo',
            'title' => 'Software Developer | UI/UX Designer | Multimedia Creator',
            'location' => 'Cebu City, Philippines, 6000',
            'profile_image' => '/images/p2.jpg',
            'about' => "I'm a software developer, UI/UX designer, and multimedia creator with a passion for building user-friendly digital experiences. My background covers both web and mobile development, where I focus on creating applications that are functional, efficient, and easy to use. I enjoy designing clean and engaging interfaces that make technology feel simple and accessible for people.

            <br><br>
            Beyond development and design, I also work with 3D content and graphics to bring ideas to life in more creative ways. I like blending technology with creativity to produce projects that are not only practical but also visually engaging. For me, every project is an opportunity to solve problems, explore new ideas, and create something meaningful.",
            
            
            'experience' => [
                [
                    'position' => 'Programming Trainer',
                    'company' => 'ACLC College of Butuan Coding Bootcamp',
                    'duration' => '2025',
                    'description' => 'Web and Mobile Application Development, Designing Flowcharts, ER Diagrams, and Database Schemas, Conducting Software Testing'
                ],
                [
                    'position' => 'Front-End Developer',
                    'company' => 'The Tabulation System: Agusan National High School Miss Pearl Pageant',
                    'duration' => '2025',
                    'description' => 'User Interface HTML, CSS, JavaScript, and Bootstrap. Ensured user-friendly UI/UX for admin and judges panel'
                ],
                [
                    'position' => 'Full-Stack Developer',
                    'company' => 'QR Attendance System: Multi-threads and Single-threads',
                    'duration' => '2025',
                    'description' => 'Back-end Python Flask, User Interface HTML, CSS, JavaScript, and Bootstrap, Database SQLite'
                ],
                [
                    'position' => 'Logo Designer',
                    'company' => 'ACLC College of Butuan CYPEER Organization',
                    'duration' => '2025',
                    'description' => 'Designed the official Logo of Organization, Delivered final assets in vector formats'
                ],
                [
                    'position' => 'Certificate of Recognition - Trainer',
                    'company' => 'ADSS Community Extension Program',
                    'duration' => '2025',
                    'description' => 'Taught basic design skills, Helped create posters and logos, Guided community members step-by-step'
                ]
            ],
            
            'education' => [
                [
                    'degree' => 'BS Information Technology',
                    'institution' => 'ACLC College of Butuan',
                    'address' => '999 HDS Building J.C Aquino Ave. <br> Butuan City, 8600',
                    'year' => '2025'
                ],
                [
                    'degree' => 'TVL Track - CSS',
                    'institution' => 'Saint James High School',
                    'address' => 'Pob. 05, Avenue Street, Buenavista <br> Agusan Del Norte, 8601',
                    'year' => '2025'
                ]
            ],
            
            'tech_stack' => [
                'Frontend' => ['React', 'Vue.js', 'JavaScript', 'HTML5', 'CSS3', 'Tailwind CSS'],
                'Backend' => ['PHP', 'Laravel', 'Node.js', 'Python', 'MySQL', 'PostgreSQL'],
                'DevOps & Cloud' => ['AWS', 'Docker', 'Git', 'Linux', 'CI/CD'],
                'AI & Machine Learning' => ['TensorFlow', 'Python', 'OpenAI API', 'Langchain']
            ],
            
            'projects' => [
                [
                    'id' => 1,
                    'title' => 'Tabulation System - Ms. Pearl ANHS',
                    'description' => 'A full-featured Tabulation platform built with Python Flask',
                    'image' => '/images/pro1.jpg',
                    'technologies' => ['HTML', 'Python', 'Flask', 'Sqlite'],
                    'live_url' => 'https://example.com',
                    'github_url' => 'https://github.com/username/project',
                    'featured' => true
                ],
                [
                    'id' => 2,
                    'title' => 'QR Attendance System',
                    'description' => 'A collaborative QR Attendance System with real-times approach.',
                    'image' => '/images/pro2.jpeg',
                    'technologies' => ['HTML', 'Python', 'Flask', 'Sqlite'],
                    'live_url' => 'https://taskapp.com',
                    'github_url' => 'https://github.com/username/taskapp',
                    'featured' => true
                ],
                // [
                //     'id' => 3,
                //     'title' => 'AI Content Generator',
                //     'description' => 'An AI-powered content generation tool using OpenAI API.',
                //     'image' => 'https://via.placeholder.com/400x300?text=AI+Content+Generator',
                //     'technologies' => ['Python', 'Flask', 'OpenAI API', 'React'],
                //     'live_url' => 'https://aicontentgen.com',
                //     'github_url' => 'https://github.com/username/ai-content',
                //     'featured' => false
                // ]
            ],
            
            'certifications' => [
                [
                    'name' => 'Best in Research Paper - Capstone',
                    'issuer' => 'Certificate of Recognition',
                    'date' => '2025',
                    'credential_id' => 'RESEARCH-2025',
                    'url' => 'https://drive.google.com/file/d/1Pz3mzMs5c4rTbU3LdpTFwttJrvKq6fT7/view?usp=sharing'
                ],
                [
                    'name' => 'On-the-Job-Training Completion',
                    'issuer' => 'Certificate of Completion',
                    'date' => '2025',
                    'credential_id' => 'OJT-2025',
                    'url' => 'https://drive.google.com/file/d/16QHH1qx2Eqy5qsfyx9s_WqUVMiZoaWkD/view?usp=sharing'
                ],
                [
                    'name' => 'ACLC Coding Bootcamp',
                    'issuer' => 'Certificate of Commendation',
                    'date' => '2025',
                    'credential_id' => 'BOOTCAMP-2025',
                    'url' => 'https://drive.google.com/file/d/1v8jduZZ0h8_fbUMrxM79aeLH9K-_3-fc/view?usp=sharing'
                ],
                [
                    'name' => 'Tabulation System Project',
                    'issuer' => 'Certificate of Recognition - Front-End Developer',
                    'date' => '2025',
                    'credential_id' => 'TAB-SYS-2025',
                    'url' => 'https://drive.google.com/file/d/11Lg3oYrmy2gNfY0zNwGPLL9CCeMCZH1Y/view?usp=sharing'
                ],
                [
                    'name' => 'Service Awardee',
                    'issuer' => 'Certificate of Recognition',
                    'date' => '2025',
                    'credential_id' => 'SERVICE-2025',
                    'url' => 'https://drive.google.com/file/d/1xFC6f5EKYE1qZ9IueL1py9rL-NUtg3yt/view?usp=sharing'
                ],
                // [
                //     'name' => 'ACLC Summer Coding Bootcamp',
                //     'issuer' => 'Certificate of Completion',
                //     'date' => '2024',
                //     'credential_id' => 'SUMMER-2024',
                //     'url' => '#'
                // ],
                // [
                //     'name' => 'Cybersecurity Sentinel Examination',
                //     'issuer' => 'Certificate of Recognition',
                //     'date' => '2023',
                //     'credential_id' => 'CYBER-EXAM-2023',
                //     'url' => '#'
                // ],
                // [
                //     'name' => 'Cybersecurity Sentinel Training',
                //     'issuer' => 'Certificate of Completion',
                //     'date' => '2023',
                //     'credential_id' => 'CYBER-TRAIN-2023',
                //     'url' => '#'
                // ],
                // [
                //     'name' => 'First Aid & Basic Life Support Training',
                //     'issuer' => 'Certificate of Completion',
                //     'date' => '2023',
                //     'credential_id' => 'FIRST-AID-2023',
                //     'url' => '#'
                // ]
            ],
            
            'social_links' => [
                'email' => 'your.email@gmail.com',
                'github' => 'https://github.com/yourusername',
                'linkedin' => 'https://linkedin.com/in/yourusername',
                'twitter' => 'https://twitter.com/yourusername',
                'website' => 'https://yourwebsite.com'
            ],
            'exellence' => [
                'award_1' => 'Best in Research Paper - Capstone | 2025',
                'award_2' => 'Special Community Service Awardee | 2025',
                'award_3' => 'Service Awardee - ADSS Officer | 2025'
            ],
        ];
        
        return view('welcome', compact('portfolio'));
    }
}
