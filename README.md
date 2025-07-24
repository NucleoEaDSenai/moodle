# Moodle no Render.com

Este repositório permite rodar o Moodle com SQLite diretamente no plano gratuito do Render.

## Deploy

1. Faça fork deste repositório ou envie para o seu GitHub
2. Vá para [https://render.com](https://render.com)
3. Clique em "New Web Service"
4. Selecione seu repositório com estes arquivos
5. O Render detectará o Dockerfile e iniciará o deploy

## Acesso

- URL: https://moodle-app.onrender.com (ou similar)
- Usuário: admin
- Senha: admin123

## Importante

- Este setup usa SQLite por simplicidade
- Para produção, conecte um banco PostgreSQL e ajuste o Dockerfile/envVars
