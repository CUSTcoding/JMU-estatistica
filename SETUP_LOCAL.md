# Setup Local - Sem Docker

## Pré-requisitos
- Python 3.8+
- pip ou conda

## Passos para Rodar Localmente

### 1. Clonar/Entrar no Diretório
```bash
cd /home/custcoding/JMU-estatistica
```

### 2. Criar Virtual Environment
```bash
# Com venv (Python padrão)
python3 -m venv venv

# Ativar no Linux/Mac
source venv/bin/activate

# Ativar no Windows
venv\Scripts\activate
```

### 3. Instalar Dependências
```bash
pip install -r requirements.txt
```

**Nota:** Atualizar requirements.txt para versão correta do Django:
```bash
pip install Django==4.2.19
```

### 4. Criar Banco de Dados
```bash
cd jmu
python manage.py migrate
```

### 5. Criar Superusuário (Opcional - para admin)
```bash
python manage.py createsuperuser
```

### 6. Rodar Servidor de Desenvolvimento
```bash
python manage.py runserver
```

Servidor estará disponível em: **http://127.0.0.1:8000**

### 7. Acessar o Formulário
- Formulário: http://127.0.0.1:8000/formulario/
- Admin: http://127.0.0.1:8000/admin/

## Troubleshooting

### Erro: "form app not installed"
Adicione `'form'` em `jmu/settings.py` na seção `INSTALLED_APPS`:
```python
INSTALLED_APPS = [
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'form',  # Adicionar esta linha
]
```

### Erro: "No such table"
```bash
python manage.py migrate
```

### Recolher Arquivos Estáticos
```bash
python manage.py collectstatic --noinput
```

## Verificação Rápida
```bash
# Dentro do diretório /jmu
python manage.py check
```
