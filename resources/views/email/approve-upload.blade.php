@component('mail::message')
# Hello {{ $nft->user->name }}

You uploaded NFT has been approved

<table class="table table-striped" >
    <tr>
        <th>Item ID:</th>
        <td>{{ $nft->itemId() }}</td>
    </tr>
    <tr>
        <th>Name:</th>
        <td>{{ $nft->name }}</td>
    </tr>

</table>
Visit your dashboard for more information

Thanks,<br>
{{ config('app.name') }}
@endcomponent
