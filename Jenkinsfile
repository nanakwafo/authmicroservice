pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                echo 'Running build automation'
                sh 'ls -la'
                archiveArtifacts artifacts: 'dist/Auntention_service.zip'
            }
        }
    }
}
