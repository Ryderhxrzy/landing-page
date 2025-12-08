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
<link rel="stylesheet" href="css/about.css">


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
                                AlerTaraQC strengthens public safety by connecting multiple city departments into one unified system.
                                Through real-time reporting, centralized data, and coordinated emergency response, the platform ensures
                                faster, smarter, and more efficient crisis management across Quezon City.
                            </p>

                            <!-- Features -->
                            <div class="home-features">
                                <div class="feature-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <h3>Real-time Monitoring</h3>
                                    <p>24/7 surveillance and instant alert system for potential threats.</p>
                                </div>

                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <h3>Multi-Department Coordination</h3>
                                    <p>Seamless communication between emergency services and government agencies.</p>
                                </div>

                                <div class="feature-item">
                                    <i class="fas fa-chart-line"></i>
                                    <h3>Data Analytics</h3>
                                    <p>Predictive analytics for improved emergency response and resource allocation.</p>
                                </div>

                                <div class="feature-item">
                                    <i class="fas fa-map-marked-alt"></i>
                                    <h3>Incident Mapping</h3>
                                    <p>Real-time incident locations displayed on an intelligent city map.</p>
                                </div>

                                <div class="feature-item">
                                    <i class="fas fa-truck"></i>
                                    <h3>Resource Tracking</h3>
                                    <p>Monitor vehicles, personnel, and emergency equipment instantly.</p>
                                </div>

                                <div class="feature-item">
                                    <i class="fas fa-database"></i>
                                    <h3>Centralized Database</h3>
                                    <p>Unified data management for all departments to share and access.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="about" id="about">
                    <div class="about-content">
                        <div class="content">
                            <h2>About <span><img src="images/tara.png" class="tara" alt=""></span>lerTaraQC</h2>
                            <p>
                                AlerTaraQC is Quezon City's premier integrated public safety and emergency management platform, 
                                designed to streamline coordination between multiple city departments and ensure rapid response 
                                to emergencies and incidents.
                            </p>
                            
                            <div class="about-grid">
                                <div class="about-item">
                                    <i class="fas fa-shield"></i>
                                    <h3>Our Mission</h3>
                                    <p>
                                        To provide a unified, efficient, and responsive emergency management system that 
                                        protects lives and property through seamless inter-departmental coordination and 
                                        real-time information sharing.
                                    </p>
                                </div>
                                
                                <div class="about-item">
                                    <i class="fas fa-eye"></i>
                                    <h3>Our Vision</h3>
                                    <p>
                                        To become the model for smart city emergency management in the Philippines, 
                                        leveraging technology to create safer, more resilient communities through 
                                        proactive and coordinated public safety initiatives.
                                    </p>
                                </div>
                                
                                <div class="about-item">
                                    <i class="fas fa-heart"></i>
                                    <h3>Our Values</h3>
                                    <p>
                                        Integrity, Excellence, Collaboration, and Innovation guide our commitment to 
                                        serving the people of Quezon City with dedication and professionalism in every 
                                        emergency response and public safety operation.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="about-stats">
                                <div class="stat-item">
                                    <h4>24/7</h4>
                                    <p>Emergency Response</p>
                                </div>
                                <div class="stat-item">
                                    <h4>10+</h4>
                                    <p>City Departments</p>
                                </div>
                                <div class="stat-item">
                                    <h4>3min</h4>
                                    <p>Avg Response Time</p>
                                </div>
                                <div class="stat-item">
                                    <h4>98%</h4>
                                    <p>Success Rate</p>
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
<script src="js/mouse-scroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/theme-toggle.js"></script>
