pipeline {
    agent any
    stages {
        stage('Preparing stage') {
            steps {
                // git
            }
        }
        stage('Build stage') {
             steps {
                 sh "php --version"
                 sh "composer install"
                 sh "curl -sS -O https://www.phing.info/get/phing-2.17.2.zip"
                 sh "./vendor/phing/phing/bin/phing"
             }
        }
        stage('Deploy stage') {
            steps {
                // Test and report
            }
        }
    }
}