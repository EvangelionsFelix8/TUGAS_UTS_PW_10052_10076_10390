function validasi(form){
    if(form.noTelp.value[0] != 0 && form.noTelp.value[1] != 8){
        alert("Telepon Harus Berawalan 08");
    }
    else if(form.noTelp.value.length < 10 || form.noTelp.value.length > 12){
        alert("Panjang nomor harus 10-12 Digit")
    }
}