pipeline {
    agent any

    environment {
        ANSIBLE_HOST_KEY_CHECKING = 'False'
    }

    stages {
        stage('Checkout Code') {
            steps {
                git branch: 'main', url: 'https://github.com/your-repo-url.git'
            }
        }

        stage('Build') {
            steps {
                echo "Building project..."
                sh 'python -m compileall src/'
            }
        }

        stage('Test') {
            steps {
                echo "Running tests..."
                sh 'pytest tests/'
            }
        }

        stage('Deploy with Ansible') {
            steps {
                echo "Running Ansible playbook..."
                sh '''
                ansible-playbook ansible/deploy.yml -i ansible/inventory
                '''
            }
        }
    }

    post {
        always {
            echo 'Pipeline completed.'
        }
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Pipeline failed.'
        }
    }
}
