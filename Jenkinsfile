pipeline {
    agent any
    stages {
        stage('Preparing stage') {
            steps {
                sh "php --version"
            }
        }
        stage('Build stage') {
             steps {
                 sh "composer install"
                 sh "curl -sS -O https://www.phing.info/get/phing-2.17.2.zip"
                 sh "./vendor/phing/phing/bin/phing"
             }
        }
        stage('Deploy stage') {
            steps {
                sh "XDEBUG_MODE=coverage ./vendor/bin/phpunit"
            }
        }
    }
}