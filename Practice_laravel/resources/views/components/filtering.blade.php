<div>
    {{ $attributes->filter(fn (string $value, string $key) => $key == 'foo') }} {{--akhane ami check korchi foo name amader kono attribute ache ki na....jodi amra amader component ar sathe foo name kono argument ba attribute pass kore thaki tahole ooo amar oi foo key soho foo ar value ta dekhiye debe----}}

    {{ $attributes->whereStartsWith('f') }} {{--amader component render ba call korar somoy or moddhe je attribute ba argument gulo pass korechilam aikhane tar theke ami check korchi je f diye shuru hoyeche eemon koita attribute ba urgument ache ----}}
</div>