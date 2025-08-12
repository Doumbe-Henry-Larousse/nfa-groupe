<x-mail::message>
# Nouveau message de contact

**Nom :** {{ $data['name'] }}  
**Email :** {{ $data['email'] }}  
**Téléphone :** {{ $data['phone'] ?? 'Non renseigné' }}  
**Sujet :** {{ $data['subject'] }}

---

**Message :**  
{{ $data['message'] }}

</x-mail::message>

