<?php 
/**
 * LGU #4 - Cards Component Page
 * Dedicated page showcasing card components and layouts
 * 
 * This page demonstrates:
 * - Various card styles and layouts
 * - Card content organization
 * - Interactive card features
 * - Responsive card designs
 * 
 * @version 1.0.0
 * @author LGU #4 Development Team
 */

// Include header with navigation and theme functionality
include 'includes/header.php'; ?>

<link rel="stylesheet" href="css/hero.css">
<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="css/home.css">


<div class="main-content">
    <div class="main-container">
        <div class="sub-container">
            <div class="page-content">
                <section class="home" id="home">
                    <div class="home-content">
                        <div class="content">
                            <h1><span><img src="images/tara.png" class="tara" alt=""></span>lerTaraQC</h1>
                            <h2>Integrated Public Safety and Emergency Management Platform</h2>
                            <p>
                                It connects multiple departments through real-time reporting, coordinated response tools, and shared data analytics—ensuring faster, smarter, and more efficient emergency management for the community.
                            </p>
                            <div class="home-features">
                                <div class="feature-item">
                                    <i class="icon-shield"></i>
                                    <h3>Real-time Monitoring</h3>
                                    <p>24/7 surveillance and instant alert system for potential threats</p>
                                </div>
                                <div class="feature-item">
                                    <i class="icon-users"></i>
                                    <h3>Multi-Department Coordination</h3>
                                    <p>Seamless communication between emergency services and government agencies</p>
                                </div>
                                <div class="feature-item">
                                    <i class="icon-chart"></i>
                                    <h3>Data Analytics</h3>
                                    <p>Advanced analytics for predictive emergency response and resource optimization</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="js/scroll-nav.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/theme-toggle.js"></script>
