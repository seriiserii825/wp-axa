<div class="online-form">
    <input type="text" name="idno" placeholder="IDNO">
    <input type="text" name="certificate" placeholder="Numărul certificatului de înmatriculare">
    <input type="text" name="number" placeholder="Număr de înmatriculare">

    <select class="form-control input-sm" id="zona-deplasare" name="zona-deplasare">
        <option value="Ucraina, Belarus">Ucraina, Belarus</option>
        <option value="Ucraina, Belarus, Rusia">Ucraina, Belarus, Rusia</option>
        <option value="Țările din sistemul 'Carte Verde'">Toate ţările din sistemul "Carte Verde"</option>
    </select>

    <select class="form-control input-sm" id="tip-autovehicul" name="tip-autovehicul">
        <option value="Autoturism">Autoturism</option>
        <option value="Autocamion - până la 3,5t ">Autocamion - până la 3,5t </option>
        <option value="Autocamion și autotractoare - peste 3,5t">Autocamion și autotractoare - peste 3,5t</option>
        <option value="Autovehicul până la 17 locuri">Autovehicul până la 17 locuri</option>
        <option value="Autovehicul peste 17 locuri">Autovehicul peste 17 locuri</option>
        <option value="Motociclete">Motociclete</option>
        <option value="Remorci tractare de autoturisme - gr. A">Remorci tractare de autoturisme - gr. A</option>
        <option value="Remorci tractare de autocamioane - gr. C1">Remorci tractare de autocamioane - gr. C1</option>
        <option value="Remorci tractare de autocamioane - gr. C2">Remorci tractare de autocamioane - gr. C2</option>
        <option value="Remorci tractare de microbuse și autobuse - gr. E1">Remorci tractare de microbuse și autobuse - gr. E1</option>
        <option value="Remorci tractare de microbuse și autobuse - gr. E2">Remorci tractare de microbuse și autobuse - gr. E2</option>
    </select>

    <select class="form-control input-sm" id="period" name="period">
        <option value="15 zile">15 zile</option>
        <option value="1 lună">1 lună</option>
        <option value="2 luni">2 luni</option>
        <option value="3 luni">3 luni</option>
        <option value="4 luni">4 luni</option>
        <option value="5 luni">5 luni</option>
        <option value="6 luni">6 luni</option>
        <option value="7 luni">7 luni</option>
        <option value="8 luni">8 luni</option>
        <option value="9 luni">9 luni</option>
        <option value="10 luni">10 luni</option>
        <option value="11 luni">11 luni</option>
        <option value="1 an">1 an</option>
    </select>

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
	<?php require_once __DIR__.'/online-form-delivery.php';?>
    <input class="btn btn-info" type="submit" value="Trimite">
</div>
<span><?php echo esc_html__( 'După plasarea comenzii, operatorul va prelua discuţia în JivoChat sau veţi fi apelat în scurt timp.', 'bs-galadent' ); ?></span>
