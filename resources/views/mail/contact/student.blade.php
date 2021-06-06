@component('mail::message')
# Contato pelo Site - Estudante

<table>
    <tbody>
        <tr>
            <td><strong>Nome:</strong></td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td><strong>E-mail:</strong></td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td><strong>Mensagem:</strong></td>
            <td>{{$message}}</td>
        </tr>
    </tbody>
</table>

<br />
<br />
<br />
Obrigado,<br>
{{ config('app.name') }}
@endcomponent
