<?php 

class Film {

    //ATTRIBUTI E PROPRIETA'
    public $titolo;
    public $titolo_originale;
    public $trama;
    public $cast;
    public $regista;
    public $anno_di_produzione; 

    //COSTRUTTORE
    function __construct($titolo, $titolo_originale, $trama="Non è stata inserita alcuna descrizione",$cast="Non è stato inserito alcun attore", $regista, $anno_di_produzione="Sconosciuto") {

        $this->titolo = $titolo;
        $this->titolo_originale = $titolo_originale;
        $this->trama = $trama;
        $this->cast = $cast;
        $this->regista = $regista;
        $this->anno_di_produzione = $anno_di_produzione;

    }
    
    //METODI 

    // METODO PER LA GESTIONE DEL TITOLO 
    public function getTitolo() {
        return $this->titolo; 
    }
    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }   // /METODO PER LA GESTIONE DEL TITOLO

    // METODO PER LA GESTIONE DEL TITOLO ORIGINALE
    public function getTitoloOriginale() {
        return $this->titolo_originale;
    }
    public function setTitoloOriginale($titolo_originale) {
        $this->titolo_originale = $titolo_originale;
    }   // /METODO PER LA GESTIONE DEL TITOLO ORIGINALE

    // METODO PER LA GESTIONE DELLA TRAMA 
    public function getTrama() {
        return $this->trama;
    }
    public function setTrama($trama) {
        $this->trama = $trama;
    }   // /METODO PER LA GESTIONE DELLA TRAMA

    // METODO PER LA GESTIONE DEL CAST 
    public function getCast() {
        return $this->cast;
    }
    public function setCast($cast) {
            $this->cast = $cast;
    }   // /METODO PER LA GESTIONE DEL CAST

    // METODO PER LA GESTIONE DEL REGISTA 
    public function getRegista() {
        return $this->regista;
    }
    public function setRegista($regista) {
        $this->regista = $regista;
    }   // /METODO PER LA GESTIONE DEL REGISTA

    // METODO PER LA GESTIONE DELL'ANNO DI PRODUZIONE 
    public function getAnnoDiProduzione() {
        return $this->anno_di_produzione;
    }
    public function setAnnoDiProduzione($anno_di_produzione) {
        $this->anno_di_produzione = $anno_di_produzione;
    }   // /METODO PER LA GESTIONE DELL'ANNO DI PRODUZIONE
}

// STAMPA PRIMO FILM
$primoFilm = new Film($titolo, $titolo_originale, $trama, $cast, $regista, $anno_di_produzione);
$primoFilm->setTitolo("La teoria del tutto");
$primoFilm->setTitoloOriginale("The Theory of Everything");
$primoFilm->setTrama("<p>Nel 1963 il giovane Stephen Hawking è un cosmologo dell'Università di Cambridge che sta cercando di trovare un'equazione unificatrice per spiegare la nascita dell'universo e come esso sarebbe stato all'alba dei tempi. A una festa universitaria conosce la studentessa di lettere Jane Wilde: entrambi sono attratti l'uno dall'altro, e ben presto Stephen invita Jane al ballo di primavera dove i due si scambiano il loro primo bacio sotto le stelle.</p>

<p>La loro storia d'amore viene ostacolata però dalla comparsa della malattia degenerativa di Stephen, l'atrofia muscolare progressiva. Anche gli studi di Hawking vengono compromessi a causa delle difficoltà quotidiane a cui è sottoposto: camminare, scrivere e infine parlare diventano ostacoli per il giovane cosmologo. Un iniziale rifiuto della malattia viene in seguito superato dalla determinazione di Jane di rimanere al fianco di Stephen, amandolo e facendosi carico della sua salute.</p>

<p>Dopo il matrimonio, inizia la loro convivenza. Stephen peggiora di giorno in giorno, e ben presto sarà costretto a spostarsi sulla sedia a rotelle. Jane ha due figli e le fatiche per accudire il marito diventano notevoli. Mentre Stephen presenta la sua nuova teoria sull'origine e sulla fine dell'universo davanti a un congresso di scienziati, Jane, che sente il peso della vita familiare, trova conforto negli incontri settimanali con il coro della chiesa.</p>

<p>Qui conosce Jonathan, un giovane vedovo insegnante di musica, che piano piano si inserisce nella famiglia Hawking. Inevitabilmente le condizioni di Stephen peggiorano e, durante una rappresentazione teatrale alla quale partecipa sotto invito, ha un malore. Jane decide di staccarsi da Jonathan, verso il quale prova dei sentimenti, oltretutto ricambiati, per assistere suo marito. Quest'ultimo viene salvato grazie a una tracheotomia che gli causerà però la perdita della voce. Distrutto dalla mancanza dell'unica facoltà motoria che gli rimaneva, Hawking sprofonda nel più completo abbandono. Sarà l'aiuto di Elaine, un'infermiera che riuscirà a farlo comunicare mediante una tavola con colori e lettere, a renderlo di nuovo capace di esprimersi.</p>

<p>Nel frattempo Stephen decide di pubblicare un libro sul tempo, comprendendo anche che i suoi sentimenti per Jane sono svaniti. Decide di lasciarle seguire la propria strada al fianco di Jonathan, proseguendo il suo lavoro aiutato da Elaine. Hawking, che riesce a comunicare grazie a una voce sintetizzata, la quale legge ciò che scrive su un apposito monitor posizionato sulla sua sedia a rotelle, viene premiato ed elogiato per le sue teorie e per il suo contributo alla fisica moderna grazie allo scritto sul tempo; rimarrà celebre una sua frase durante un incontro con il pubblico: \"Finché c\'è vita, c\'è speranza\".</p>

<p>Stephen riceve un invito dalla Regina Elisabetta, che lo onora del titolo di cavaliere dell'ordine britannico (titolo che rifiuterà), portando con sé i figli e Jane, la prima donna ad aver creduto nelle sue idee e ad averlo aiutato a renderle concrete.</p>");
$primoFilm->setCast(
    "<li>Davide Perino: Stephen Hawking</li> 
    <li>Valentina Favazza: Jane Wilde Hawking </li> 
    <li>Roberta Pellini: Elaine Mason</li> 
    <li>Gianfranco Miranda: Jonathan Hellyer Jones</li> 
    <li>Ada Maria Serra Zanetti: Beryl Wilde</li> 
    <li>Daniele Valenti: George Wilde</li> 
    <li>Angelo Maggi: Dennis William Sciama</li> 
    <li>David Chevalier: Brian</li> 
    <li>Franco Mannella: Frank Hawking</li> 
    <li>Anna Cugini: Isabel Hawking</li> 
    <li>Emanuela Ionica: Philippa Hawking</li> 
    <li>Simone Mori: Roger Penrose</li> 
    <li>Roberto Certomà: Kip Thorne</li> 
    <li>Domitilla D\'Amico: Diana King</li> 
    <li>Ivan Melkumjan: Isaak Markovich Khalatnikov</li> 
    <li>Marco Vivio: Carter</li> 
    <li>Edoardo Stoppacciaro: Ellis</li> 
    <li>Federico Viola: Rees</li> 
    <li>Carlo Reali: John Taylor</li> 
    <li>Robert Steiner: voce elettronica di Stephen Hawking</li> "
);
$primoFilm->setRegista("James Marsh");
$primoFilm->setAnnoDiProduzione(2014);
// /STAMPA PRIMO FILM

// STAMPA SECONDO FILM
$primoFilm = new Film($titolo, $titolo_originale, $trama, $cast, $regista, $anno_di_produzione);
$primoFilm->setTitolo("A Beautiful Mind");
$primoFilm->setTitoloOriginale("A Beautiful Mind");
$primoFilm->setTrama("<p>Nel 1947, il diciannovenne e talentuoso matematico John Nash entra all'Università di Princeton. Refrattario a instaurare rapporti sociali, Nash ha solo un amico: Charles Herman, il suo compagno di stanza. Ossessionato dal pensiero di trovare un'idea originale a cui applicare le sue formule, John riesce nel suo obiettivo: in una tesi di dottorato di sole 27 pagine espone geniali intuizioni fondamentali allo sviluppo della \"teoria dei giochi\", facendo così diventare obsolete le teorie economiche di Adam Smith.</p>

<p>Le sue idee gli procurano fama e un importante posto di ricercatore al Wheeler Laboratory del Massachusetts Institute of Technology (MIT) di Boston, dove trova conferma il suo genio matematico. In piena guerra fredda viene contattato dal Pentagono per la sua incredibile capacità di decodificatore. Nella sala di decrittazione, il protagonista isola una serie di numeri, di una radiotrasmissione proveniente da Mosca, che gli dà l'impressione di essere un messaggio crittato. Dopo aver analizzato il messaggio cifrato con il semplice uso della memoria, il protagonista scopre che certi numeri rappresentano le coordinate geografiche di due città degli Stati Uniti, con le relative istruzioni di transito degli agenti segreti. Intanto gli viene assegnato anche il compito di tenere una serie di lezioni al Wheeler Laboratory, che svolge di malavoglia.</p>

<p>Una sera entra in contatto con William Parcher, eminenza grigia del Dipartimento della Difesa, il quale lo assolda per una missione segreta relativa alla ricerca del luogo dove i russi collocheranno una bomba atomica miniaturizzata contenuta in uno zaino, da far scoppiare e creare un enorme numero di morti fra i civili. Secondo Parcher i russi sul territorio degli Stati Uniti, comunicano fra loro per mezzo di codici inseriti in inserzioni giornalistiche, quindi il lavoro affidato a Nash consiste nel cercare e trovare questi messaggi e comunicarli in un rapporto mensile che consegnerà in una cassetta postale anonima, dietro un cancello che si apre per mezzo di un codice numerico che viene generato da un diodo radioattivo innocuo, impiantato sottocute nel braccio di Nash.</p>

<p>Contemporaneamente John viene in contatto con Alicia, una giovane studentessa di fisica, che si è innamorata di lui, la affascina con una forma che lui disegna per lei nel cielo stellato e con una dichiarazione d'amore insolita che lei accetta.</p>

<p>Il lavoro per il Dipartimento della Difesa continua in modo serrato, i dati vengono estrapolati dalle riviste periodiche e i rapporti vengono consegnati regolarmente. John ritrova il suo vecchio amico Charles che ha adottato Marcee, una nipotina alla quale sono morti i genitori. Con Alicia va tutto bene e alla fine si sposano. William Parcher tiene d'occhio Nash da lontano e una sera lo coinvolge in una sparatoria contro gli agenti russi. John torna a casa affranto, vorrebbe nascondere quello che gli è successo ma i russi lo seguono dappertutto e Alicia si accorge che lui è gravemente malato e decide di aiutarlo.</p>

<p>Un giorno Nash vede dei russi che lo hanno pedinato e tenta di scappare, ma viene accerchiato e il capobanda inaspettatamente dichiara di essere il dottor Rosen, lo psichiatra dell'ospedale McArthur, dove Nash viene ricoverato. Il dottor Rosen capisce che Charles è un'allucinazione di Nash e controlla chi era il compagno di stanza di Nash a Princeton: con una telefonata chiarisce che a Princeton, Nash ha sempre vissuto in una stanza da solo. L'unico modo che il dottor Rosen ha di aiutare Nash, è di mostrargli tutto ciò che è reale e tutto ciò che crea solo la sua mente. Il dottor Rosen parla anche con Alicia e la manda a cercare William Parcher. Alicia incomincia a controllare l'ufficio di John al Wheeler Laboratory assieme a Sol e Bender, i due colleghi di Nash, e scopre la verità: il marito in ufficio passava il tempo a ritagliare periodici, cercando improbabili codici di coordinate geografiche, dove trovare i russi. Alicia scopre anche la cassetta postale di una villa chiusa, dove Nash depositava i rapporti e li trova tutti, chiusi lì.</p>");
$primoFilm->setCast(
    "<li>Russell Crowe: John Nash</li> 
    <li>Jennifer Connelly: Alicia Larde Nash </li> 
    <li>Ed Harris: William Parcher</li> 
    <li>Paul Bettany: Charles Herman</li> 
    <li>Vivien Cardone: Marcee Herman</li> 
    <li>Christopher Plummer: dottor Rosen</li> 
    <li>Adam Goldberg: Richard Sol</li> 
    <li>Josh Lucas: Martin Hansen</li> 
    <li>Anthony Rapp: Bender</li> 
    <li>Anna Cugini: Isabel Hawking</li> 
    <li>Jason Gray-Stanford: Nielsen Ainsley</li> 
    <li>Judd Hirsch: professor Helinger</li> 
    <li>Austin Pendleton: Thomas King</li> 
    <li>Jesse Doran: Generale</li> 
    <li>Alex Toma: Toby Keller</li>"
);
$primoFilm->setRegista("Ron Howard");
$primoFilm->setAnnoDiProduzione(2001);
?>  <!-- /STAMPA SECONDO FILM -->
 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <section class="film">
            <h2>Primo film</h2>
            <div><strong>Titolo del film: </strong><?php echo $primoFilm->titolo.";"; ?></div>
            <div><strong>Titolo originale del film: </strong><?php echo $primoFilm->titolo_originale.";"; ?></div>
            <div><strong>Trama del film: </strong><?php echo $primoFilm->trama; ?></div>
            <div><strong>Cast del film: </strong>
                <ul>
                <?php echo $primoFilm->cast; ?>
                </ul>
            </div>
            <div><strong>Regista del film: </strong><?php echo $primoFilm->regista.";"; ?></div>
            <div><strong>Anno di produzione del film: </strong><?php echo $primoFilm->anno_di_produzione.";"; ?></div>
        </section>
        <hr>
        <section class="film">
            <h2>Secondo film</h2>
            <div><strong>Titolo del film: </strong><?php echo $primoFilm->titolo.";"; ?></div>
            <div><strong>Titolo originale del film: </strong><?php echo $primoFilm->titolo_originale.";"; ?></div>
            <div><strong>Trama del film: </strong><?php echo $primoFilm->trama; ?></div>
            <div><strong>Cast del film: </strong>
                <ul>
                <?php echo $primoFilm->cast; ?>
                </ul>
            </div>
            <div><strong>Regista del film: </strong><?php echo $primoFilm->regista.";"; ?></div>
            <div><strong>Anno di produzione del film: </strong><?php echo $primoFilm->anno_di_produzione.";"; ?></div>
        </section>
    </body>
</html>

echo "<br>Regista del film: ".$primoFilm->regista.";";
echo "<br>Anno di produzione del film: ".$primoFilm->anno_di_produzione.";";



