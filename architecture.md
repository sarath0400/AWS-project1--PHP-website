# Architecture – AWS Multi-Tier Web Application

## Overview
I have implemented a **3-tier web application architecture on AWS** to achieve scalability, high availability, and security.

---

## Architecture Flow

User  
↓  
Application Load Balancer  
↓  
Auto Scaling Group (EC2 – Apache + PHP)  
↓  
Amazon RDS (MySQL)

---

## Web Layer
- I configured an **Application Load Balancer** to handle incoming HTTP traffic.
- The load balancer distributes traffic across multiple EC2 instances.
- EC2 instances are placed in **public subnets**.

---

## Application Layer
- I deployed the application on **EC2 instances** running Apache and PHP.
- I created a **custom AMI** after configuring the application.
- I used a **Launch Template** with the custom AMI.
- EC2 instances are managed by an **Auto Scaling Group**.

---

## Database Layer
- I created an **Amazon RDS MySQL** database.
- The database is deployed in a **private subnet**.
- Public access to the database is disabled.
- Database access is allowed only from the EC2 security group.

---

## Network Configuration
- I created a VPC with public and private subnets.
- An Internet Gateway is attached to the VPC.
- EC2 instances use public subnets for internet access.
- RDS is isolated in private subnets.

---

## Security Configuration
- Web EC2 security group allows:
  - HTTP (80) from the internet
  - SSH (22) from a specific IP
- RDS security group allows:
  - MySQL (3306) only from the EC2 security group
- No direct internet access to the database.

---

## Scalability and Availability
- I configured Auto Scaling to:
  - Automatically add instances during high traffic
  - Replace unhealthy instances
- The application remains available even if an EC2 instance fails.
