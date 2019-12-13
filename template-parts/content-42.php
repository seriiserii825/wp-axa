<div class="online-form">
    <input type="text" name="idno" placeholder="IDNO">
    <input type="text" name="certificate" placeholder="Numărul certificatului de înmatriculare">
    <input type="text" name="number" placeholder="Număr de înmatriculare">
    <input type="tel" name="phone" placeholder="Numărul de telefon">
    <input type="email" name="email" placeholder="E-mail">
    <div class="online-form__checkbox">
        <input type="checkbox" name="termen" id="checkbox-termen">
        <label for="checkbox-termen"><a href="#">Accept Termenii şi Condiţiile</a></label>
    </div>
    <div class="online-form__checkbox">
        <input type="checkbox" name="prelucrare" id="checkbox-prelucrare">
        <label for="checkbox-prelucrare"><a href="#">Accept Prelucrarea datelor cu caracter personal.</a></label>
    </div>
    <input class="btn btn-info" type="submit" value="Trimite">
</div>

<span><?php echo esc_html__( 'După plasarea comenzii, operatorul va prelua discuţia în JivoChat sau veţi fi apelat în scurt timp.', 'bs-galadent' ); ?></span>
