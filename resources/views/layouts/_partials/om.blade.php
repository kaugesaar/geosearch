<div class="modal fade om-modal" tabindex="-1" role="dialog" aria-labelledby="omModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2 text-left page-header">Om GeoSearch</h2>
                <p>
                    GeoSearch använder sig av samma metod som AdWords gör när du i
                    förhansvisaren kan välja att kolla på annonser baserat på placering.
                    AdWord's gränssnitt är dock krångligt, segt och att knäcka en hash är kul. Så det här var en lagom söndagsutmaning.
                </p>
                <h3>HUR!?</h3>
                <p>
                    <code>&uule=</code> är svaret. När du förhandsvisar annonser i AdWords för t ex. Sweden så får du
                    <code>&uule=w+CAIQICIGU3dlZGVu</code> - Skulle vi ändra till Göteborg så får du:
                    <code>&uule=w+CAIQICIoR290aGVuYnVyZyxWYXN0cmEgR290YWxhbmQgQ291bnR5LFN3ZWRlbg</code>.
                </p>
                <h4>Det är ju bara två strängar käbbel!?</h4>
                <p>
                    Nej nej, låt oss nu jämföra dessa två strängar. Du behöver inte särskilt många IQ-pinnar för att se
                    att <code>w+CAIQICI</code> finns i båda strängarna. För de efarna ser
                    andra delen av strängen väldigt mycket ut som base64. Vilket det nästan är. Första bokstaven
                    efter <code>w+CAIQICI</code> visa sig vara någon typ av nyckel. Efter den är det dock ren base64,
                    så när du decodar <code>U3dlZGVu</code> bör du få <strong>Sweden</strong>. Decoda den längre och du får
                    <strong>Gothenburg,Vastra Gotaland County,Sweden</strong>, vilket stämde överens med vad jag valde i AdWords.
                </p>
                <h4>Låt oss knäcka nyckeln</h4>
                <p>
                    Mitt mission just nu är att knäcka den där nyckeln. Jag gjorde det enkelt för mig genom att scrapea alla städer i
                    Sverige. Efter ett taffligt försök genom att först tänkt alldeles för avancerat så framkommer det att nyckeln är baserad på längden
                    hos strängen. Sweden innehåller 6 tecken. Nyckeln var G. Låt oss nu gå tillbaka till förskolan A, B, C, D, E, F, <strong>G</strong>. Nu tror
                    du kanske jag är galen och inte kan räkna till 6. Men i en array skulle G haft position 6 eftersom du börjar räkna på noll.
                </p>
                <p>
                    Det visar sig att de ganska roliga nissarna på google verkar har gjort en nyckeln som bygger på exakt samma tecken som base64 eller
                    mer exakt. Base 64 Encoding som är URL och filnamnssäkert, alltså inga "/" & "+" och istället "-" & "_". Räkna bara längden på strängen, och
                    plocka ut motsvarande position i en array med alla tecken. Där har du din nyckel!
                </p>
                <img src="/images/win.gif" class="center-block"/>
                <hr>
                <p>
                    För er som vill iplementera i egna system och inte redan haft lika kul, eller inte vill (knäcka hash)
                    så kan ni se <a href="https://gist.github.com/kaugesaar/ec518152ec38720e3f06" target="_blank">denna gisten</a>.
                </p>
            </div>
        </div>
    </div>
</div>