# AWS Multi-Tier Web Application

## Project Overview
Deployed a scalable multi-tier web application on AWS using EC2, Auto Scaling, Application Load Balancer, and Amazon RDS (MySQL). The architecture follows AWS best practices for security, availability, and scalability.

## Architecture
- Web Tier: EC2 instances (Apache + PHP) behind an Application Load Balancer
- Auto Scaling Group using Launch Template
- Database Tier: Amazon RDS (MySQL) in private subnet

## AWS Services Used
- Amazon EC2
- Amazon RDS (MySQL)
- Auto Scaling Group
- Launch Template
- Application Load Balancer
- Amazon VPC
- Security Groups
- Amazon AMI

## Security
- EC2 allows HTTP (80) from internet and SSH (22) from specific IP
- RDS allows MySQL (3306) only from EC2 security group
- Database is not publicly accessible

## Implementation Summary
- Configured EC2 with Apache, PHP, and application code
- Created RDS MySQL instance and database
- Connected application to RDS using PHP mysqli
- Created custom AMI from configured EC2
- Created Launch Template using AMI
- Configured Auto Scaling Group and attached Load Balancer

## Auto Scaling
- Automatic instance scaling based on demand
- Auto-healing by replacing unhealthy instances
- High availability across multiple Availability Zones


