from django.db import models

class Inquerito(models.Model):

    nome_completo = models.CharField(max_length=200)
    sexo = models.CharField(max_length=20)

    data_nascimento = models.DateField()
    naturalidade = models.CharField(max_length=100)
    nacionalidade = models.CharField(max_length=100)

    cargo_pastoral = models.CharField(max_length=100)
    igreja_local = models.CharField(max_length=100)
    classe = models.CharField(max_length=100)

    estado_civil = models.CharField(max_length=100)

    formacao_teologica = models.CharField(max_length=100)
    formacao_academica = models.CharField(max_length=100)

    cargo_igreja = models.CharField(max_length=10)
    status_membro = models.CharField(max_length=100)

    feedback = models.TextField()

    criado_em = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.nome_completo
