-- BeyondCode Database Schema
-- Complete database setup for software development company website

-- Create database
drop database if exists beyondcode;
CREATE DATABASE IF NOT EXISTS beyondcode;
USE beyondcode;

-- Users Table (for authentication/registration)
CREATE TABLE IF NOT EXISTS users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20),
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin', 'staff') DEFAULT 'user',
    profile_picture VARCHAR(255),
    bio TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status ENUM('active', 'inactive', 'banned') DEFAULT 'active'
);

-- Services Table
CREATE TABLE IF NOT EXISTS services (
    service_id INT PRIMARY KEY AUTO_INCREMENT,
    service_name VARCHAR(150) NOT NULL,
    slug VARCHAR(150) UNIQUE,
    description TEXT NOT NULL,
    detailed_description LONGTEXT,
    icon VARCHAR(100),
    image VARCHAR(255),
    price DECIMAL(10, 2),
    category VARCHAR(100),
    is_featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Blog/Posts Table
CREATE TABLE IF NOT EXISTS posts (
    post_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE,
    content LONGTEXT NOT NULL,
    excerpt VARCHAR(500),
    author_id INT NOT NULL,
    featured_image VARCHAR(255),
    category VARCHAR(100),
    tags VARCHAR(255),
    is_published BOOLEAN DEFAULT FALSE,
    view_count INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(user_id)
);

-- Team Members Table
CREATE TABLE IF NOT EXISTS team_members (
    member_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(150) NOT NULL,
    position VARCHAR(100) NOT NULL,
    bio TEXT,
    image VARCHAR(255),
    email VARCHAR(100),
    phone VARCHAR(20),
    social_links JSON,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Testimonials/Client Feedback Table
CREATE TABLE IF NOT EXISTS testimonials (
    testimonial_id INT PRIMARY KEY AUTO_INCREMENT,
    client_name VARCHAR(150) NOT NULL,
    client_title VARCHAR(100),
    client_image VARCHAR(255),
    testimonial_text TEXT NOT NULL,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    is_featured BOOLEAN DEFAULT FALSE,
    is_approved BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Portfolio/Projects Table
CREATE TABLE IF NOT EXISTS projects (
    project_id INT PRIMARY KEY AUTO_INCREMENT,
    project_name VARCHAR(150) NOT NULL,
    slug VARCHAR(150) UNIQUE,
    description TEXT NOT NULL,
    detailed_description LONGTEXT,
    technologies VARCHAR(255),
    image VARCHAR(255),
    gallery JSON,
    project_url VARCHAR(255),
    client_name VARCHAR(150),
    service_id INT,
    is_featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (service_id) REFERENCES services(service_id)
);

-- Contact Messages Table
CREATE TABLE IF NOT EXISTS contact_messages (
    message_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(200) NOT NULL,
    message LONGTEXT NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    is_responded BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Settings Table
CREATE TABLE IF NOT EXISTS settings (
    setting_id INT PRIMARY KEY AUTO_INCREMENT,
    setting_key VARCHAR(100) UNIQUE NOT NULL,
    setting_value LONGTEXT,
    setting_type VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert Sample Data
-- Services
INSERT INTO services (service_name, slug, description, category, is_featured) VALUES
('Web Development', 'web-development', 'Custom website development using latest technologies', 'Development', TRUE),
('Mobile App Development', 'mobile-app-development', 'Native and cross-platform mobile applications', 'Development', TRUE),
('Web Design', 'web-design', 'Modern, responsive web design services', 'Design', TRUE),
('Consulting', 'consulting', 'Technology consulting and strategic planning', 'Consulting', FALSE),
('Domain Services', 'domain-services', 'Domain registration and management', 'Services', FALSE),
('Web Hosting', 'web-hosting', 'Reliable and secure web hosting solutions', 'Services', FALSE);

-- Team Members
INSERT INTO team_members (full_name, position, bio, image) VALUES
('Aijuka Josbert', 'CEO & Founder', 'Visionary leader with 2+ years in software development', 'team_john.jpg'),
('Amumpaire Joan', 'Lead Developer', 'Expert in full-stack web development and architecture', 'team_jane.jpg'),
('Mike Johnson', 'UI/UX Designer', 'Creative designer focused on user experience', 'team_mike.jpg');

-- Testimonials
INSERT INTO testimonials (client_name, client_title, testimonial_text, rating, is_approved, is_featured) VALUES
('Deputy UBOS', 'Government Organization', 'BeyondCode delivered an outstanding website. Their team is professional, responsive, and truly understands client needs. Highly recommended!', 5, TRUE, TRUE),
('Lawyer At Uganda High Court', 'Legal Professional', 'Excellent service! They met every request perfectly and made changes easily. A reliable partner for any digital project.', 5, TRUE, TRUE),
('CEO MultiTech Aviation', 'Aviation Industry', 'Incredible work on our digital transformation. They were professional and delivered exactly what we needed. Their team knows how to operate.', 5, TRUE, TRUE);

-- Settings
INSERT INTO settings (setting_key, setting_value, setting_type) VALUES
('company_name', 'BeyondCode', 'text'),
('company_email', 'info@beyondcode.com', 'email'),
('company_phone', '+256759420168', 'text'),
('company_address', '1214 Main Street, Kampala, Uganda', 'text'),
('company_description', 'A Software Development Company', 'text'),
('tagline', 'We Build Your Imagination', 'text');
