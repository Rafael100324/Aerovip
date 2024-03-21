<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon"
        href="/images/icon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <title>Aerovip - Check-out</title>
</head>

<body>
    <div class="all_informations">

        <form class="credit_card">
            <h2>Pagar com o Cartão</h2>

            <label class="numerocard">
                <p>Número de passagens</p><input min="1" type="number" required class="tamanho">
            </label>
            <label class="name">
                <p>Nome no Cartão</p><input type="text" required class="tamanho">
            </label>

            <label class="numbem">
                <p>Número do Cartão</p><input type="text" maxlength="16" required class="tamanho">
            </label>
            <label class="date">
                <p>Data de Validade</p><input type="date" required class="tamanho">
            </label>
            <label class="csc">
                <p>Código de Segurança (CSC)</p><input type="password" maxlength="3" required class="tamanho">
            </label>
            <button class="tamanho"><a href="./sucesso">Finalizar Pagamento</a></button>

        </form>
    </div>
    <div>
        <tbody>

        <h3>Informações da passagem</h3>
            @foreach($cards->all() as $card)
                <label >
                    <p>Preço: {{ $card->price }}</p>
                </label>
                <label>
                    <p>Data: {{ $card->date }}</p>
                </label>
                <label>
                    <p>Local: {{ $card->local }}</p>
                </label>
                <label>
                    <p>Horário: {{ $card->time }}</p>
                </label>
            @endforeach
    
                    <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
            </tbody>
    </div>
</body>

</html>
