
<h1>Muusika küsitlus</h1>

<form id="regform">
    <table id="Tabel1">
        <tr>
            <td>
                <strong>Milliseid ansambleid sa tead?</strong><br>
                <input type="checkbox" name="valik" id="acdc" value="AC/DC"> <label for="acdc">AC/DC</label><br>
                <input type="checkbox" name="valik" id="guns" value="Guns'N Roses"> <label for="guns">Guns'N Roses</label><br>
                <input type="checkbox" name="valik" id="queen" value="Queen"> <label for="queen">Queen</label><br>
                <input type="checkbox" name="valik" id="nirvana" value="Nirvana"> <label for="nirvana">Nirvana</label>
                <br><span class="error" id="errorAnsambleid"></span>
            </td>
            <td><div class="result-block" id="vastus1"></div></td>
        </tr>

        <tr>
            <td>
                <label for="arvate">Mida arvad muusika kuulamisest koolis?</label><br>
                <input type="text" id="arvate">
                <span class="error" id="errorArvamus"></span>
            </td>
            <td><div class="result-block" id="vastus2"></div></td>
        </tr>

        <tr>
            <td>
                <label>Mitu tundi päevas sa kuulad muusikat?</label><br>
                0 <input type="range" id="slider" min="0" max="24"> 24
            </td>
            <td><div class="result-block" id="vastus3"></div></td>
        </tr>

        <tr>
            <td>
                <strong>Kas sa kuulad raadiot?</strong><br>
                <input type="radio" name="sugu" id="jah" value="Sa kuulad raadio!"> <label for="jah">Jah</label>
                <input type="radio" name="sugu" id="ei" value="Sa ei kuula raadio!"> <label for="ei">Ei</label>
                <br><span class="error" id="errorRaadio"></span>
            </td>
            <td><div class="result-block" id="vastus4"></div></td>
        </tr>

        <tr>
            <td>
                <label for="grupp">Milliseid raadiojaamu oskad nimetada?</label><br>
                <input type="text" id="grupp">
                <span class="error" id="errorJaamad"></span>
            </td>
            <td><div class="result-block" id="vastus5"></div></td>
        </tr>

        <tr>
            <td>
                <strong>Millist muusikat sa kõige rohkem kuulad?</strong><br>
                <input type="radio" name="stiil" id="rock" value="Rock"><label for="rock">Rock</label><br>
                <input type="radio" name="stiil" id="hardrock" value="Hard Rock"><label for="hardrock">Hard Rock</label><br>
                <input type="radio" name="stiil" id="metal" value="Metal"><label for="metal">Metal</label><br>
                <span class="error" id="errorStiil"></span>
            </td>
            <td><div class="result-block" id="vastus6"></div></td>
        </tr>

        <tr>
            <td colspan="2" style="text-align:center;">
                <button type="button" id="submitBtn">Saada vastused</button>
                <button type="button" id="Puhasta">Puhasta</button>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="result-block" id="kokkuvote"></div>
            </td>
        </tr>
    </table>
</form>


