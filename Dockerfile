FROM bitnami/moodle:latest

# Define variáveis de ambiente padrão (pode sobrescrever no painel Render)
ENV MOODLE_USERNAME=admin \
    MOODLE_PASSWORD=admin123 \
    MOODLE_EMAIL=admin@example.com \
    MOODLE_DATABASE_TYPE=sqlite
