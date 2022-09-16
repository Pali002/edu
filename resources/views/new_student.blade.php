<h1>Tölts ki a mezőket</h1>
<form action="submit-student" method="post">
    {{csrf_field()}}
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name" placeholder="Név">
    </p>
    <p>
        <label for=""> Email: </label>
        <input type="text" name="email" placeholder="Email">
    </p>
    <p>
        <label for=""> Telefon: </label>
        <input type="text" name="phone" placeholder="Telefon">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>