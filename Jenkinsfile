pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                script {
                    sh 'docker build -t php-app .'
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    sh 'docker-compose up -d'
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    // Tester si l'application est accessible
                    sh 'curl http://localhost:8080'
                }
            }
        }
    }
}
