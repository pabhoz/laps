node{
    environment{
        CI = 'true'
    }
    stages {
        stage('Checkout') {
            steps {
                echo 'Cheking out...'
                sh 'rm -rf *'
                sh 'ls'
                checkout([$class: 'GitSCM', branches: [[name: '*/master']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: 'ab26ea6d-6a55-437d-9bdd-c981ce043068', url: 'https://bitbucket.org/pabhoz/formatic-pruebas-laps']]])
                sh 'wget https://codeception.com/codecept.phar'
                sh 'mv ./codecept.phar ./codecept'
                sh 'chmod +x ./codecept'
                sh 'ls'
            }
        }
        stage('Build') {
            steps {
                echo 'Building...'
                sh 'tar -czvf ../build.tar.gz ../TutorialLAPS'
                sh 'ls ..'
                echo 'Built'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
                sh "./codecept run unit"
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}