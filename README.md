# Ambiente de Testes Moodle com Docker

Este projeto configura um ambiente Moodle completo com PostgreSQL utilizando Docker Compose.

## Como usar

### Requisitos
- Docker e Docker Compose instalados

### Passos
1. Execute:
   docker-compose up

2. Acesse:
   - http://localhost:8080
   - Usuário: admin
   - Senha: admin123

3. Para instalar plugins:
   - Acesse o painel administrativo do Moodle
   - Vá para "Site Administration → Plugins → Install plugins"
   - Envie o seu plugin .zip

---

Você também pode usar este ambiente em nuvens como Railway, Render ou Oracle Cloud.
