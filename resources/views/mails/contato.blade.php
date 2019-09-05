@component('mail::message')
# Olá,

Você acaba de receber uma nova mensagem.

**NOME:** {{ $name }}

**E-MAIL:** {{ email }}

**MENSAGEM:** {{ message }}

Atenciosamente, <br>
Recicla Maps
@endcomponent
