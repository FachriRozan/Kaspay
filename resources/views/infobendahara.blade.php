<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Info Bendahara') }}
            </h2>
        </div>
    </x-slot>
    <style>
    .borderbungkus{
    height: auto;
    width: auto;
    padding: 10px;
    border-radius: 25px;
    background-color: white;
}
.borderbendahara{
    height: auto;
    width: auto;
    padding: 10px;
    border-radius: 25px;
    background-color: white;
    display: flex;
    justify-content: center;
}

    .contentbendahara {
    display: flex;
    flex-direction: row; /* Mengatur tata letak elemen dalam satu baris */
    justify-content: space-between; /* Mengatur ruang di antara elemen-elemen di dalam flex container */
    align-items: flex-start; /* Mengatur penempatan elemen-elemen ke bagian atas */
    text-align: left; /* Mengatur teks menjadi kiri */
    margin-top: 20px; /* Menyesuaikan margin atas */
}
    .contentbendahara h1{
    font-size: 40px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: black;
    text-align: left;
}
.contentbendahara hr{
    width: 1126px;
    height: 5px;
    color: #D0D1D2;
}
.framefoto{
    display: flex;
    width: 345px;
    height: 426px;
    background-color: #D6E5EC;
    margin-top: 10px;
}
.circleframe{
    width: 255px;
    height: 260px;
    border-radius: 100%;
    background-color: white;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 15px solid #ABC6C6;
}
.frameinfo{
    display: flex;
    width: 532px;
    height: 456px;
    border: 1px solid black ;
    border-bottom: 2px solid #7a7777;
    margin-left: 30px;
}
.infobendahara ul li{
    font-family: 'Times New Roman', Times, serif;
    font-size: 29px;
    text-align: left;
    color: black;
    margin-left: 20px;
    letter-spacing: 5%;
    line-height: 50px;
} 
.contact{
    width: 356px;
    height: 51px;
    background-color: #D6E5EC;
    margin-top: 20px;
    margin-left: 20px;
    margin-bottom: 20px;

}

.contact p{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 30px;
    letter-spacing: 5%;
    color: grey;
    text-align: left;
    margin-left: 10px;
}



/* CSS untuk mengubah kelas-kelas Tailwind menjadi CSS */
.my-container {
    margin-left: auto;
    margin-right: auto;
    margin-top: 2.5rem; /* Set ke 10 untuk mengubah dari mt-10 menjadi margin-top: 2.5rem */
    max-width: 36rem; /* Set ke max-width: 2xl untuk mengubah dari max-w-2xl */
    display: grid;
    grid-template-columns: repeat(1, minmax(0, 1fr)); /* Set ke grid-cols-1 untuk mengubah dari grid-cols-1 */
    gap: 2rem 1rem; /* Set ke gap-x-8 dan gap-y-16 */
    border-top: 1px solid #e2e8f0; /* Set ke border-t dan border-gray-200 */
    padding-top: 2.5rem; /* Set ke pt-10 untuk mengubah dari pt-10 */
}

/* CSS untuk mengubah kelas-kelas Tailwind menjadi CSS */
.my-container {
    margin-left: auto;
    margin-right: auto;
    margin-top: 2.5rem; /* Set ke 10 untuk mengubah dari mt-10 menjadi margin-top: 2.5rem */
    max-width: 36rem; /* Set ke max-width: 2xl untuk mengubah dari max-w-2xl */
    display: flex;
    gap: 2rem 1rem; /* Set ke gap-x-8 dan gap-y-16 */
    border-top: 1px solid #e2e8f0; /* Set ke border-t dan border-gray-200 */
    padding-top: 2.5rem; /* Set ke pt-10 untuk mengubah dari pt-10 */
}

@media (min-width: 1024px) {
    .my-container {
        margin-left: 2.5rem; /* Set ke lg:mx-10 untuk mengubah dari lg:mx-10 */
        margin-right: 2.5rem; /* Set ke lg:mx-10 untuk mengubah dari lg:mx-10 */
        max-width: none; /* Set ke lg:max-w-none untuk mengubah dari lg:max-w-none */
        flex: 1 1 0%; /* Menyesuaikan proporsi lebar fleksibel */
    }
}


.bg{
    background-image: url(../img/bg.jpg);
    background-repeat: repeat-y;
} 

    </style>
    <div class="contentbendahara">
        <div class="borderbungkus">
            <div class="borderbendahara">
                <div class="framefoto">
                    <div class="circleframe"> </div>
                </div>
                <div class="frameinfo">
                    <div class="infobendahara">
                        <ul>
                            <li>Nama: Meutia Aini</li>
                            <li>NPM : 2208107010005 </li>
                            <li>No. Rek: 7200482853 (BSI) </li>
                        </ul>
                        <div class="infocontact"></div>
                            <div class="contact">
                                <p>KONTAK</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="bi bi-telephone-fill"></i>
                                    081377016292
                                </li>
                                <li>
                                    <i class="bi bi-envelope-fill"></i>
                                    meutiaaini01@gmail.com
                                </li>
                                <li>
                                    <i class="bi bi-whatsapp"></i>
                                    081377016292
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>