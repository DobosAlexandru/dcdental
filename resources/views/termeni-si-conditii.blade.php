@extends('_layouts.app')


@section('content')
<h1 class="vh">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

@include('_components/top-bar')

<section class="py-12">
	<article class="container mx-auto px-3">
        <div class="font-indigo-900 ">
            <ol>
                <li>
                    <p class="text-lg font-semibold text-indigo-900">Prin utilizarea site-ului <a href="/" class="text-indigo-700">https://www.dcdental.ro/</a>, sunteți de acord cu aceste condiții de utilizare. <br>Accesul la site și utilizarea sa sunt supuse condițiilor de utilizare și legilor și regulamentelor aplicabile. <br>Accesând și utilizând site-ul acesta, acceptați aceste condiții.
                    </p>
                </li>
                <li class="mt-3 text-justify">
                    <p><span class="font-bold text-indigo-900 text-lg">Proprietatea conținutului </span>– Site-ul și tot ceea ce cuprinde, inclusiv dar fără a se limita la texte și imagini, sunt în proprietatea și sub dreptul de autor (copyright) DC dental, cu excepția cazului în care este specificat altfel. Este interzisă utilizarea conținutului fără permisiunea în scris a proprietarului conținutului, conform legilor cu privire la proprietatea intelectuală. DC dental poate oferi utilizatorului sau clientului, la solicitarea expresă a acestuia, printr-un acord, dreptul de a utiliza sub o formă descrisă, un anumit conținut al site-ului. Acest acord se aplică strict pentru conținutul definit în prealabil, pe o perioadă stabilită și doar pentru persoana care a solicitat și căreia i s-a permis utilizarea.
                    </p>
                </li>
                <li class="mt-3 text-justify"><p><span class="font-bold text-indigo-900 text-lg">Utilizarea Site-ului</span> – Puteți utiliza acest site pentru folosul personal și non-comercial, descărcând conținutul doar în conformitate cu informațiile referitoare la dreptul de autor (copyright) și alte drepturi de proprietate intelectuală. Cu excepția celor menționate mai devreme, nu aveți permisiunea să distribuiți, modificați, copiați, transmiteți, expuneți, refolosiți, reproduceți, transferați, sau să folosiți conținutul fără acordul scris DC dental. Este interzisă utilizarea site-ului pentru a transmite materiale care pot constitui sau încuraja un comportament ce poate da naștere unei infracțiuni sau care încalcă legea în orice fel. Este interzisă utilizarea site-ului în scop de publicitate.</p>
                </li>
            </ol>
        </div>
        <h3 class="mt-5 text-indigo-900 tracking-normal leading-tight">Politica de Confidențialitate</h3>
        <div class="mt-3 text-base font-light text-black leading-relaxed tracking-normal font-mono text-justify">
            <p>Politica de confidențialitate descrie practicile cu privire la datele personale pe care le colectăm prin intermediul acestui care orice date cu caracter personal, inclusiv dar fără a se limita la: nume, adresă, număr de telefon sau adresă de email, pe care le transmiteți pe site, prin email sau orice altă modalitate, vor fi utilizate în conformitate cu Politica de Confidențialitate.</p>
            <p>Datele dvoastră personale vor putea fi utilizate de către DC dental pentru informare prin email, poștă, sau alte mijloace de comunicare despre oferte, produse noi, etc. </p>
            <p>Datele furnizate de către clienți sunt strict confidențiale. DC dental se angajează să nu furnizeze aceste date unor terțe persoane sau companii și să le utilizeze strict pentru uzul relației de afaceri dintre client și DC dental.</p>
            <p>Acest site folosește măsuri de securitate împotriva pierderii, alterării, folosirii greșite a informațiilor care se află în controlul nostru.</p>
            <p>DC dental se obligă să respecte drepturile dvoastră conferite de Legea 677/2001. </p>
            <p>Puteți oricând să solicitați rectificarea, actualizarea, blocarea, ștergerea sau transformarea datelor dvoastră personale printr-un email trimis la adresa office@dcdental.ro </p>
        </div>
        <h3 class="mt-5 text-indigo-900 leading-tight">Formularul de contact</h3>
        <div class="mt-3 text-base font-light text-black leading-relaxed tracking-normal font-mono text-justify">
            <p>Prin utilizarea formularului de contact, utilizatorul/clientul permite DC dental sa il contacteze prin orice mijloc disponibil, incluzand si mijloace electronice.</p>
            <p>Prin completarea campurilor din cadrul paginii “Contact” de pe site,  https://www.dcdental/contact, utilizatorul/clientul permite DC dental sa il contacteze utilizand datele de contact introduse.</p>
            <p>Completarea partiala sau integrala a formularului de contact si trimiterea acestuia nu reprezinta in nici un fel un angajament din partea DC Dental de a contacta utilizatorul/clientul.
            </p>
        </div>
        <h3 class="mt-5 text-indigo-900 leading-tight">Politica de cookies</h3>
        <div class="mt-3 text-base font-light text-black leading-relaxed tracking-normal font-mono text-justify">
            <p>În afară de datele colectate direct, cum ar fi informațiile referitoare la nume sau adrese de email, site-ul nostru colectează informații despre dispozitivul pe care îl utilizați și care pagini ale site-ului nostru au fost accesate, cât timp, etc. Aceste ultime informații sunt au 3 surse: fișiere server log, cookies și pixel tags.</p>
            <p>Fișierele de pe server se referă la IP-ul dvoastră, care este logat automat în fișierele de server ori de câte ori utilizați site-ul. DC dental folosește adresele IP pentru a calcula nivelurile de utilizare ale site-ului, pentru a diagnostica probleme și pentru administrare site. Colectarea adreselor IP este o procedură standard pe internet și este utilizată de multe website-uri. Aceste date sunt o categorie distinctă față de datele cu caracter personal. </p>
            <p>Un cookie este un fișier text care conține bucăți de date, colectate la vizitarea unui website. Sunt concepute pentru a ajuta site-urile la identificarea activității trecute a utilizatorilor, ceea ce include click-urile făcute pe linkuri sau pagini, revenirea asupra unor pagini pe parcursul a mai multor luni, etc. </p>
            <p>Cookies sunt fișiere trimise de pe un server pe calculatorul unei persoane, sunt standard si site-urile le folosesc pentru a simplifica accesul la un website și pentru a facilita utilizarea. Cookies nu aduc nici un fel de modificări sau daune computerului sau fișierelor. Dacă nu doriți ca aceste informații să fie stocate prin cookies, majoritatea browserelor au metode simple de a permite ștergerea cookies-urilor stocate, respingerea automată a cookies sau optarea pentru acceptare sau respingere. </p>
            <p>Pentru o mai bună înțelegere, clasificăm mai jos tipurile de cookies care sunt folosite pe acest site, astfel încât să puteți decide dacă doriți să le ștergeți sau să le dezactivați.</p>
            <ul>
                <li><p>Cookies strict necesare – permit navigarea pe site și utilizarea caracteristicilor acestuia. Acest tip nu colectează informații despre dvoastră care ar putea fi folosite pentru publicitare, marketing, promovarea de produse sau servicii, ori înregistrarea activității dvoastră pe internet. </p></li>
                <li><p>Cookies de performanță – colectează informații despre modul în care utilizate site-ul (paginile vizualizate cel mai des, etc). Nu colectează informații care să vă identifice, toate datele fiind anonime. Aceste cookies sunt folosite doar pentru îmbunătățirea modului în care funcționează site-ul.</p></li>
                <li><p>Cookies de funcționalitate – înregistrează alegerile și modificările făcute pe site, și oferă caracteristici de utilizare personalizate. Aceste cookies se referă strict la site-ul nostru.</p></li>
                <li><p>Cookies de direcționare – furnizează anunțuri sau mesaje în conformitate cu interesele dvoastră, și pot fi legate de alte site-uri (de ex, Facebook).</p></li>
            </ul>
            <p class="mt-1"><span class="font-bold">Ștergere Cookies</span></p>
            <p>Dacă nu sunteți de acord cu utilizarea de cookies pe site-ul nostru, le puteți șterge urmând pașii de mai jos. Puteți de asemenea face setări astfel încât browser-ul pe care îl utilizați să blocheze cookies sau să vă avertizeze cu o notificare înainte de stocarea de cookies. Dacă ștergeți cookies, este posibil să nu puteți utiliza o parte din serviciile de pe site-urile vizitate.</p>
            <p>Procedura de ștergere automată a cookies pentru Chrome este:</p>
            <p>Click pe pictograma de meniu din colțul dreapta sus (sub formă de 3 bare orizontale), selectați <span class="font-semibold">Settings > Show advanced settings > Privacy </span> și apăsați pe <span class="font-semibold">Content settings.</span></p>
            <p>În fereastra care se deschide, sub cookies, selectați butonul <span class="font-semibold">“Keep local data only until you quit your browser.”</span></p>
            <p>Click pe <span class="font-semibold"> Done </span> în partea de jos a ferestrei.</p>
            <p>Pentru alt browser sau pentru alte setări, găsiți informații și detalii pe numeroase site-uri. </p>
            <p>Tagurile pixel adună date statistice de bază asupra folosirii site-ului și a reacțiilor, permițând numărarea vizitatorilor (în scop statistic), oferirea de servicii de brand și analizarea eficacității promoției și campaniilor de publicitate. </p>
            <p> <span class="font-semibold">DC dental </span> poate revizui sau actualiza aceste condiții fără notificare prealabilă, în orice moment. Pentru a lua la cunoștință Condițiile de Utilizare, trebuie consultat site-ul nostru.</p>
        </div>
        <h3 class="mt-5 text-indigo-900 leading-tight">Google Analytics și Adwords</h3>
        <div class="mt-3 text-base font-light text-black leading-relaxed tracking-normal font-mono text-justify">
            <p>Acest site folosește Google Analytics, un serviciu de analiză web al Google Inc ( “Google”). Google Analytics folosește cookie-uri. În numele operatorului site-ului nostru, Google va utiliza aceste informații pentru a evalua utilizarea site-ului de către dvs., elaborarea de rapoarte privind activitatea site-ului și furnizarea de servicii conexe către operatorul site-ului. Puteți refuza utilizarea cookie-urilor prin modificarea setărilor browser-ului.</p>
            <p>Dacă doriți, puteți evita detectarea de Google Analytics, făcând clic pe link-ul de mai jos. Acesta va seta un cookie de renunțare, care împiedică în viitor colectarea informațiilor de pe acest site:</p>
            <span class="font-bold">https://tools.google.com/dlpage/gaoptout</span>
            <p>Folosim Google Analytics pentru a evalua datele din programul AdWords în scopuri statistice. Dacă nu doriți acest lucru, puteți gestiona preferințele ( https://adssettings.google.com/ ).</p>
        </div>
        <h3 class="mt-5 text-indigo-900 leading-tight">Soluționarea conflictelor</h3>
        <div class="mt-3 text-base font-light text-black leading-relaxed tracking-normal font-mono text-justify">
            <p>Orice conflict între DC dental și Clienți va fi rezolvat pe cale amiabilă. În acest caz vă rugăm să trimiteți un email sau să sunați la numărul de contact de pe site. În cazul în care conflictul nu se rezolvă pe cale amiabilă, se vor aplica prevederile legale românești în domeniu, prima cale de soluționare fiind medierea, apoi apelarea la instanțe românești competente.</p>
        </div>
	</article>
</section>

@endsection
