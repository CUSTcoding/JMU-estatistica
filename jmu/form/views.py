from django.shortcuts import render, redirect
from .models import Inquerito

def formulario(request):

    if request.method == "POST":

        Inquerito.objects.create(

            nome_completo=request.POST.get("nome_completo"),
            sexo=request.POST.get("sexo"),

            data_nascimento=request.POST.get("data_nascimento"),
            naturalidade=request.POST.get("naturalidade"),
            nacionalidade=request.POST.get("nacionalidade"),

            cargo_pastoral=request.POST.get("cargo_pastoral"),
            igreja_local=request.POST.get("igreja_local"),
            classe=request.POST.get("classe"),

            estado_civil=request.POST.get("estado_civil"),

            formacao_teologica=request.POST.get("formacao_teologica"),
            formacao_academica=request.POST.get("formacao_academica"),

            cargo_igreja=request.POST.get("cargo_igreja"),
            status_membro=request.POST.get("status_membro"),

            feedback=request.POST.get("feedback")

        )

        return redirect("sucesso")

    return render(request, "app_inquerito/form.html")


def sucesso(request):
    return render(request, "app_inquerito/sucesso.html")
