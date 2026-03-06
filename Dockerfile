# Use Python 3.11
FROM python:3.11-slim

# Define diretório de trabalho dentro do container
WORKDIR /app

# Copia e instala dependências
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Copia todo o projeto para /app
COPY . .

# Expõe a porta 8000 para o Django
EXPOSE 8000

# Comando para rodar o servidor Django
CMD ["gunicorn", "jmu.wsgi:application", "--bind", "0.0.0.0:8080"]
