<html>
    <body>
        <form action="Sonuc.php" method="get">
            Adiniz Soyadiniz: <input type="text" name="AdSoyad"><br>
            E-Mail Adresiniz: <input type="email" name="EmailAdresi"><br>
            Telefon Numaraniz: <input type="text" name="Telefon"><br>
            Cinsiyet: <input type="radio" name="Cinsiyet" value="Erkek"> Erkek <input type="radio" name="Cinsiyet" value="Kadin"> Kadin <br>
            Yasiniz: <select name="Yas" id="">
                        <option value="0">0</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                     </select><br>
            <input type="submit" value="Gonder">
        </form>
    </body>
</html>