@component('mail::message')
# Bienvenue {{$user->prenom}} {{$user->name}} 

Merci de vous être enregistré(e) avec l'adresse {{$user->email}}
@endcomponent
