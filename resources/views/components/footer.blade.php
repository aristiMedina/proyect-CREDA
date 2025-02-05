
<div {{ $attributes->merge(['class'=>'w-100 fixed-bottom py-3 d-flex flex-row align-items-center justify-content-center '. $class ]) }}>

    <div class="d-flex gap-2 flex-wrap align-items-center justify-content-center">
        <span>© 2021 • Proyecto TecnoInclusión •</span>

        @if ($isAuth)

        <span>Universidad Nacional de Colombia •</span>
        <span>Universidad de Caldas•</span>
        <span>Grupo GAIA•</span>
        <span>Colombia Científica</span>

        @else
            <img src="https://seeklogo.com/images/U/universidad-de-caldas-logo-8EDA5E9197-seeklogo.com.png" width="40">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 2048 546" width="170">
                <path transform="translate(0)" d="m0 0h2048v546h-2048z" fill="transparent"/>
                <path transform="translate(260,72)" d="m0 0h28l17 2 12 2 27 8 24 10 16 9 14 10 10 8 10 9 7 7 9 11 8 11 11 18 10 21 7 21 3 16 1 14v46l-2 21-12 36-8 18-14 20-8 11-8 9-4 6-4 3h-2l-2 4-7 6-10 8-12 8-16 10-34 13-19 5-12 3-10 1h-37l-21-2-30-9-21-8-23-12-13-9-16-13-5-6v-3l5 1 23 12 19 8 14 5 24 6 9 1h34l10-2 17-7 10-7 6-4-23-3-12-1-21-6-16-8-11-9-10-8-7-8-8-13v-7l7 1 16 8 17 8 10 4 7 2 16 4 14 1h23l19-4 18-6 14-7 19-13 10-9 7-7 12-16 8-16 6-14 4-17 1-9v-22l-3-17-4-15-8-16-6-11-9-10-2-4-3-1v-2l-5-2-7-8-10-8-10-7-16-8-14-6-18-6-16-4-48 1-8 2-13 2-14 3-25 10-21 11-12 8-14 12-10 10-9 11-9 13-8 16-6 15-6 20-3 20v44l3 19 3 15-2 2-5-8-8-20-5-20-3-21v-38l3-21 3-12 11-28 7-16 9-15 10-14 11-13 14-14 13-10 14-9 10-6 9-4 16-7 28-9 14-3z" fill="#FFCB74"/>
                <path transform="translate(242,193)" d="m0 0h2l-1 5-8 15-6 18-1 4v7l2 7 6 8 7 4h15l14-4 21-9 15-9 2 1-6 7-5 4-11 14-14 20-15 25-12 22-13 25-5 11-1 4-5-1-34-17-5-4-1-2v-16l3-26 6-26 5-15 9-20 10-19 13-19 11-13z" fill="#D73743"/>
                <path transform="translate(364,265)" d="m0 0 4 1 2 27v15l-2 20-4 15-5 12-7 9-8 6-11 5-16 4-8 1h-12l-5-3 8-24 4-19 1-7v-52l4 1 8 11 10 15 10 11 5 3h6l7-3 5-11 2-11z" fill="#046277"/>
                <path transform="translate(755,164)" d="m0 0h27l11 2 8 7 2 5v11l-7 8-2 1 1 4 10 14h2l13-29 10-22 1-1h15l5 8 15 34 4 9v3l-2 1h-13l-2-2-2-6-25-1-2 8h-36l-7-9-5-7-5-1v17l-1 1h-14l-1-1z" fill="#040507"/>
                <path transform="translate(651,163)" d="m0 0h13l11 4 5 4 5 7 2 7v12l-3 9-4 6-7 5-11 3h-10l-11-3-8-6-4-5-2-5-1-13 2-9 4-6 7-6 7-3z" fill="#040507"/>
                <path transform="translate(1233,163)" d="m0 0h12l10 3 10 9 4 10v12l-4 11-7 7-8 4-5 1h-12l-12-4-8-7-4-8-1-4v-10l3-10 8-9 9-4z" fill="#040507"/>
                <path transform="translate(1122,163)" d="m0 0h13l10 4 8 7 4 9 1 7-2 13-6 9-9 6-7 2h-11l-11-3-9-6-4-6-2-6v-14l3-8 4-6 8-5z" fill="#040507"/>
                <path transform="translate(1349,164)" d="m0 0h27l12 2 6 5 3 6v6l-4 6v4h2l3 6v7l-4 7-10 5h-36v-53z" fill="#040507"/>
                <path transform="translate(879,164)" d="m0 0h15l5 5 9 12 2 1 2-4 9-11 6-2h12v54h-15l-1-1v-30l-9 11-3 4-4-1-7-7-5-6-1 3v26l-1 1h-14l-1-1v-53z" fill="#040608"/>
                <path transform="translate(1277,164)" d="m0 0h16l6 7 8 10 4-4 8-10 4-3h14l1 4v50l-1 1h-13l-2-1-1-29-9 10-3 4-4-1-7-7-5-6-1 29-1 1h-14l-1-32v-22z" fill="#040607"/>
                <path transform="translate(573,164)" d="m0 0h32l7 2 8 9 1 3v9l-3 7-7 5 3 5 10 13-1 2h-16l-3-3-10-14-5-2v18l-2 1h-13l-1-1z" fill="#040506"/>
                <path transform="translate(1664,164)" d="m0 0h12l6 5 12 16 4 5v2h2l-1-12v-16h16l1 2-1 52-2 1h-11l-10-12-11-15-1 4v23h-16z" fill="#040507"/>
                <path transform="translate(716,163)" d="m0 0h13l10 4 4 3-1 4-5 5-3 1-9-3-9 1-4 2-3 5v12l4 6 5 3h7l7-3v-4l-12-1-2-4v-8l1-1h27v24l-6 7-13 4h-11l-11-4-8-7-4-9-1-4v-10l4-10 7-8 9-4z" fill="#040608"/>
                <path transform="translate(525,164)" d="m0 0h21l9 2 7 6 3 6 1 9-2 7-8 7-9 3h-14v14l-1 1-15-1v-53z" fill="#040608"/>
                <path transform="translate(1456,164)" d="m0 0h11l3 3 21 48v4h-14l-3-2-1-7h-26l-1 7-1 1h-17l5-13 16-35 2-5z" fill="#040608"/>
                <path transform="translate(975,164)" d="m0 0h10l4 5 13 30 8 17-1 3h-15l-4-8-25-1-2 8h-17l5-13 12-26 7-14z" fill="#040507"/>
                <path transform="translate(831,164)" d="m0 0h15l5 8 15 34 4 9v3l-2 1h-13l-2-2-2-6-25-1-2 8h-18l9-20 15-33z" fill="#040607"/>
                <path transform="translate(1960,164)" d="m0 0h12l3 3 13 30 8 18v4h-14l-3-2-2-6-25-1-2 8-3 1-13-1 2-9 13-28 7-16z" fill="#040607"/>
                <path transform="translate(1612,164)" d="m0 0h42v13l-1 1h-27l1 6 26 1v12l-2 1h-25v7h15l14 1v12l-10 1h-34v-54z" fill="#04080A"/>
                <path transform="translate(1814,334)" d="m0 0h24l7 3 4 5 2 5-1 5-4 4h-2l7 9 1 7-3 6-6 4-3 1h-26l-1-1v-47z" fill="#04080B"/>
                <path transform="translate(1901,163)" d="m0 0h13l14 7v4l-7 7-9-3h-8l-7 4-3 7 1 9 4 6 5 2 9-1 7-3 4 1 5 6-1 5-10 5-5 1h-12l-9-3-8-7-4-6-2-7v-10l3-9 4-6 7-6z" fill="#040607"/>
                <path transform="translate(1550,163)" d="m0 0h13l9 4 5 4-1 4-5 5-7-1-3-1h-9l-6 4-3 7 1 8 4 7 4 2 10-1 6-3 5 1 6 8-5 5-7 3-5 1h-11l-10-3-8-6-5-8-1-4v-12l4-10 5-7 8-5z" fill="#040607"/>
                <path transform="translate(1069,163)" d="m0 0h12l9 4 5 3 1 3-8 8-9-3h-9l-6 4-3 8 2 10 5 5 9 1 10-5 4 2 5 7-1 4-10 5-5 1h-11l-10-3-8-6-5-10-1-4v-9l3-10 5-7 10-6z" fill="#040608"/>
                <path transform="translate(1805,164)" d="m0 0h41v13l-1 1h-26v9h25l1 1v11l-1 1-24 1-1 18h-15v-54z" fill="#040608"/>
                <path transform="translate(287,161)" d="m0 0 4 1 12 5 12 9 7 8 6 11v12l9-2 19-10 9-8 5-5-1 7-8 13-6 8-13 7-26 8h-13l-1-3 7-15v-14l-4-12-4-6-5-4-9-7z" fill="#FFCB74"/>
                <path transform="translate(575,338)" d="m0 0h12l6 3 5 5 3 6v13l-4 8-6 5-6 2h-9l-8-4-5-6-2-4-1-10 3-9 4-5z" fill="#FEFDFD"/>
                <path transform="translate(1717,338)" d="m0 0h12l6 3 7 8 2 8-1 9-6 9-10 5h-9l-8-4-5-6-2-6v-12l4-8 7-5z" fill="#FEFDFD"/>
                <path transform="translate(1098,338)" d="m0 0h12l8 4 5 6 2 6v9l-3 8-8 7-6 2h-8l-10-5-5-8-1-4v-9l4-9 6-5z" fill="#FEFDFD"/>
                <path transform="translate(675,255)" d="m0 0 9 1 6 3 6 7 2 5v11l-4 8-7 6-3 1h-13l-7-4-4-5-3-8v-8l3-8 8-7z" fill="#FEFDFD"/>
                <path transform="translate(1388,338)" d="m0 0h12l6 3 6 7 2 5v11l-5 10-8 5-4 1h-8l-8-4-6-7-2-7v-7l3-8 7-7z" fill="#FEFDFD"/>
                <path transform="translate(948,338)" d="m0 0h12l8 4 5 7 1 3v14l-5 8-5 4-7 2h-7l-8-3-6-7-2-5v-13l3-6 8-7z" fill="#FEFDFD"/>
                <path transform="translate(1545,255)" d="m0 0 8 1 8 4 5 8 1 3v12l-5 8-6 5-11 2-9-3-5-4-4-7-1-11 3-9 7-6z" fill="#FEFDFD"/>
                <path transform="translate(1663,255)" d="m0 0 9 1 8 4 4 5 2 5v13l-5 8-6 5-8 2-8-1-9-6-4-8-1-9 3-9 5-6z" fill="#FEFDFD"/>
                <path transform="translate(1624,338)" d="m0 0h12l6 3 5 5 3 6v14l-5 8-7 5-4 1h-8l-10-5-4-5-2-5v-12l4-8 7-6z" fill="#FEFDFD"/>
                <path transform="translate(1075,255)" d="m0 0 10 2 8 7 3 7v11l-4 8-7 6-10 2-9-2-6-5-4-8-1-10 3-9 8-7z" fill="#FEFDFD"/>
                <path transform="translate(1724,164)" d="m0 0h46l1 1v11l-1 2h-16v41h-15l-1-1v-39l-1-1-14-1-1-1v-11z" fill="#040A0C"/>
                <path transform="translate(848,252)" d="m0 0h26l5 3 5 6 1 2v9l-4 6-4 3-6 1 7 9 7 7 1 3-3 1-8-7-7-7-3-4-13-1v17l-5 1v-48z" fill="#040A0D"/>
                <path transform="translate(524,252)" d="m0 0h20l6 3 5 6 1 2v9l-4 6-6 4h-3l3 5 3 3v2h2l5 6v3l-5-1-12-12-3-4h-13v16l-5 1v-48z" fill="#040A0C"/>
                <path transform="translate(1166,164)" d="m0 0h15v42l9-1h16l1 1v13h-41l-1-1v-53z" fill="#040708"/>
                <path transform="translate(1479,256)" d="m0 0h12l9 2 6 4 5 10v8l-4 10-5 4-5 2-16 1-3-1v-39z" fill="#FEFDFD"/>
                <path transform="translate(782,338)" d="m0 0h9l9 2 6 4 5 8v13l-4 8-8 5-18 1-2-1-1-38z" fill="#FEFDFD"/>
                <path transform="translate(1182,256)" d="m0 0h13l8 2 8 7 3 8v7l-3 8-8 7-3 1h-18l-1-1v-38z" fill="#FEFDFD"/>
                <path transform="translate(1781,251)" d="m0 0 3 1 8 16 12 27 2 3v3l-5-1-5-10h-28l-6 11h-4l3-10 9-19 9-20z" fill="#040A0D"/>
                <path transform="translate(681,334)" d="m0 0 4 1 13 27 7 16 1 5-5-1-5-10-28-1-2 6-3 6h-4l1-6 17-37z" fill="#04090C"/>
                <path transform="translate(1892,334)" d="m0 0 4 1 13 27 5 12 3 6v3l-4-1-6-10-28-1-2 6-3 6h-4l1-5 11-25 8-16z" fill="#04090C"/>
                <path transform="translate(1855,164)" d="m0 0h15l1 4-1 50-1 1h-13l-2-5v-49z" fill="#040A0D"/>
                <path transform="translate(1779,164)" d="m0 0h14v54l-1 1h-10l-4-1-1-2v-51z" fill="#04090B"/>
                <path transform="translate(1406,164)" d="m0 0h15l1 1v42l-1 12h-14l-1-1-1-53z" fill="#04090B"/>
                <path transform="translate(1585,164)" d="m0 0h16v15l-1 40h-13l-2-1z" fill="#040506"/>
                <path transform="translate(614,334)" d="m0 0 4 2 12 14 14 17 3 4 1-36 4-1 1 1v48l-4-1-8-10-12-14-8-10v-2h-2v36l-5 1-1-2v-27z" fill="#040E11"/>
                <path transform="translate(1949,252)" d="m0 0h4v48l-4-1-9-10-9-11-11-14-1 36-5 1-1-1v-33l1-14 4 1 9 10 10 13 7 8 3 4 1-36z" fill="#041014"/>
                <path transform="translate(1237,176)" d="m0 0 10 2 5 5 1 3v10l-4 6-5 4h-11l-7-6-2-4v-10l4-6 4-3z" fill="#FEFDFD"/>
                <path transform="translate(1122,177)" d="m0 0h11l5 3 4 8v7l-4 7-6 4h-10l-6-4-3-5-1-8 3-7 4-4z" fill="#FEFDFD"/>
                <path transform="translate(655,176)" d="m0 0 9 2 5 4 2 4v10l-4 6-5 4h-10l-5-3-4-5-1-2v-10l4-6 5-3z" fill="#FEFDFD"/>
                <path transform="translate(1178,252)" d="m0 0h21l10 4 7 8 2 4 1 11-3 10-7 8-6 3-5 1h-19l-3-1v-47zm4 4-1 1v38l1 1h18l6-3 6-7 2-6v-7l-3-8-8-7-8-2z" fill="#040C0F"/>
                <path transform="translate(1627,333)" d="m0 0 12 1 8 5 7 9 2 11-2 10-6 9-6 4-6 2h-11l-9-4-7-6-4-9v-12l4-10 8-7zm-3 5-7 4-5 6-2 5v12l4 8 5 4 7 3h8l7-3 6-5 3-6v-14l-3-6-5-5-6-3z" fill="#040C0F"/>
                <path transform="translate(1660,251)" d="m0 0h12l7 3 8 7 4 9v12l-3 8-6 7-8 4-4 1h-9l-10-4-8-9-2-6v-14l4-8 5-5 7-4zm3 4-10 4-6 7-2 10 2 10 5 7 7 4 8 1 10-3 7-8 2-4v-13l-4-8-7-5-7-2z" fill="#040B0E"/>
                <path transform="translate(1073,251)" d="m0 0 12 1 8 5 6 8 2 8v7l-3 10-6 7-9 4-4 1h-9l-12-6-6-9-2-8 1-11 4-8 6-5 6-3zm2 4-11 3-7 8-2 7 1 10 4 8 6 5 10 2 9-2 8-7 3-7v-11l-4-8-7-6z" fill="#040C0F"/>
                <path transform="translate(1101,333)" d="m0 0 12 1 7 4 8 9 2 7v8l-3 10-7 8-10 4h-11l-8-3-7-6-4-8-1-4v-9l4-10 4-5 9-5zm-3 5-8 5-4 5-2 6v9l3 8 5 5 8 4h8l8-3 7-8 2-6v-9l-3-8-7-6-5-2z" fill="#040D10"/>
                <path transform="translate(672,251)" d="m0 0h11l10 4 7 8 2 5v17l-5 9-5 4-10 4h-10l-9-4-7-7-3-6-1-5v-7l3-10 7-8zm3 4-9 3-7 8-2 6v8l4 10 7 6 3 1h13l7-4 5-6 2-5v-11l-4-8-7-6-6-2z" fill="#040A0D"/>
                <path transform="translate(776,334)" d="m0 0h20l9 3 8 8 3 7v13l-5 10-6 5-8 3h-22l-1-1v-47zm6 4-4 2 1 38 2 1 18-1 8-5 4-8v-13l-5-8-6-4-9-2z" fill="#040D10"/>
                <path transform="translate(1757,334)" d="m0 0 4 1 8 10 10 15h2l7-12 9-12 2-2 4 1v47h-4l-1-40-7 12-10 14h-3l-17-25-1 35h-4v-43z" fill="#04090B"/>
                <path transform="translate(952,333)" d="m0 0 11 1 8 5 5 6 3 7v13l-4 9-9 8-7 2h-11l-7-3-8-7-4-8v-13l4-10 8-7 5-2zm-4 5-6 3-7 8-1 3v13l4 8 6 5 6 2h7l8-3 6-5 3-6v-14l-5-9-6-4-3-1z" fill="#040C0F"/>
                <path transform="translate(1542,251)" d="m0 0h10l8 3 7 6 4 7 1 5v10l-3 8-6 7-8 4-4 1h-10l-10-5-7-8-2-6v-14l4-8 8-7zm3 4-11 4-6 7-2 7 1 11 6 9 7 4 8 1 9-3 7-6 3-6v-12l-5-10-6-4-7-2z" fill="#040C0F"/>
                <path transform="translate(1109,252)" d="m0 0 4 2 9 11 8 9 11 14 1 1 1-37 5 1v47l-5-1-7-9-12-14-9-11v-2h-2l1 12-1 26-5-1v-20z" fill="#040B0E"/>
                <path transform="translate(578,333)" d="m0 0 12 1 9 6 6 9 1 5v10l-4 10-8 7-8 3h-11l-8-3-5-4-5-8-1-3v-14l4-9 8-7 4-2zm-3 5-8 4-6 9-1 9 2 8 4 6 5 4 5 2h9l9-4 5-6 2-5v-13l-5-9-6-4-3-1z" fill="#040C0F"/>
                <path transform="translate(1719,333)" d="m0 0 13 1 8 5 6 8 2 6v12l-5 10-7 6-9 3h-10l-7-3-8-7-4-9v-12l3-9 7-7 6-3zm-2 5-8 4-5 7-1 3v12l3 8 7 6 5 2h9l10-5 6-9 1-9-3-9-7-8-5-2z" fill="#040B0E"/>
                <path transform="translate(1475,252)" d="m0 0h21l8 3 7 6 4 7v16l-4 8-7 6-9 3h-20l-2-4v-39zm4 4-1 1v39l6 1 13-1 8-4 4-6 2-6v-8l-5-10-6-4-9-2z" fill="#040E11"/>
                <path transform="translate(266,208)" d="m0 0 9 2 5 6 2 4-1 9-6 7-3 1h-9l-7-4-3-4v-10l4-7 5-3z" fill="#D73743"/>
                <path transform="translate(1392,333)" d="m0 0 13 2 8 6 4 6 2 7v10l-3 8-7 8-6 3-5 1h-10l-8-4-8-8-4-10v-7l3-9 8-9 6-3zm-4 5-6 3-7 8-2 6v7l3 8 6 7 7 3h8l10-4 6-9 1-3v-11l-4-8-7-6-3-1z" fill="#040C0F"/>
                <path transform="translate(711,252)" d="m0 0 4 2 12 14 11 14 6 7 1-37 5 1v47l-2 1-5-5-13-15-8-10-5-6v-2h-2v37l-4 1-1-1z" fill="#04080A"/>
                <path transform="translate(1525,334)" d="m0 0 4 1v47l-4-2-5-5-13-15-11-14-1 36-5 1v-48l4 1 13 15 9 11 8 10v-37z" fill="#040A0D"/>
                <path transform="translate(338,260)" d="m0 0 8 1 5 3 4 7-1 9-5 6-9 3-8-3-5-5-1-2v-8l3-6 6-4z" fill="#046176"/>
                <path transform="translate(890,339)" d="m0 0h22l5 4 2 4v7l-4 6-3 2-5 1h-16l-1-1z" fill="#FEFDFD"/>
                <path transform="translate(1369,252)" d="m0 0h34v4l-29 1-1 17h28l1 4h-29v18h31l-1 5h-33l-2-1v-44z" fill="#040F13"/>
                <path transform="translate(1447,334)" d="m0 0h33v4l-29 1 1 17h26l1 4-1 1h-27v17h29l1 5h-33l-1-1-1-9v-38z" fill="#040F13"/>
                <path transform="translate(1870,252)" d="m0 0h34l-1 4-28 1-1 17h28l1 4-3 1h-25l-1 17h30l1 4-1 1h-33l-2-4v-40z" fill="#041013"/>
                <path transform="translate(1226,252)" d="m0 0h34v4l-28 1-1 17h27l1 4h-28v18h30v5h-34l-1-1z" fill="#040608"/>
                <path transform="translate(825,334)" d="m0 0h33v4l-29 2v16h26l2 1-1 4h-27v15l1 2 29 1-1 4h-33l-1-1v-47z" fill="#040B0E"/>
                <path transform="translate(772,251)" d="m0 0h12l8 4 4 4v3l-5-1-7-4-7-1-8 2-5 5 1 5 4 3 21 5 6 5 2 5-1 7-5 5-6 3-4 1h-8l-9-3-7-6v-4l4 1 9 6 10 1 8-3 3-3-1-7-4-3-20-5-6-4-3-5 1-7 4-5z" fill="#040D10"/>
                <path transform="translate(1611,251)" d="m0 0h11l10 5 2 2v4l-5-2-7-3-8-1-9 3-2 2v7l8 4 17 4 7 6 1 2v8l-6 7-9 3h-9l-10-4-5-4-1-5 5 1 6 5 7 2 9-1 5-3 2-3-1-7-6-3-17-4-5-3-4-5v-7l6-7z" fill="#040B0E"/>
                <path transform="translate(1138,334)" d="m0 0 7 6 11 13 9 11 6 8 2 1-1-2v-36h4l1 47-4-1-12-13-14-17-4-5-1 37-5-1v-47z" fill="#04090B"/>
                <path transform="translate(566,252)" d="m0 0h31v4l-29 1v16l28 1-1 5h-27v17h30v5h-34l-1-1v-47z" fill="#040E11"/>
                <path transform="translate(1e3 333)" d="m0 0 11 1 8 5 2 2v3l-5-1-7-4h-12l-7 4-1 5 1 3 6 3 18 4 6 4 3 7-1 7-7 6-6 2h-11l-8-3-7-6v-4l5 2 5 4 6 2h9l8-4 1-7v-3l-9-3-17-4-7-6-1-7 4-6 5-4z" fill="#040C0F"/>
                <path transform="translate(523,256)" d="m0 0h15l9 2 4 5v10l-4 4-3 1h-21l-1-1v-20z" fill="#FEFDFD"/>
                <path transform="translate(852,256)" d="m0 0h17l7 2 4 6v9l-5 4-2 1h-21l-1-1v-19z" fill="#FEFDFD"/>
                <path transform="translate(725,333)" d="m0 0h7l9 3 5 5 1 3-5-1-7-4h-13l-6 4-1 6 4 4 20 5 7 4 2 3v9l-7 8-6 2h-11l-8-3-7-5v-4l5 1 5 4 6 2h8l7-3 3-4-1-6-5-3-20-5-7-6-1-7 4-7 7-4z" fill="#040B0E"/>
                <path transform="translate(927,252)" d="m0 0 5 1v33l-3 7-4 5-6 3-10 1-9-4-6-8-1-3v-34h5l1 33 2 5 4 4 3 1h10l6-5 2-5z" fill="#04090B"/>
                <path transform="translate(887,334)" d="m0 0h24l7 3 5 7 1 9-2 6-4 5-4 2-14 1h-9l-1 16h-4v-48zm3 5v23l1 1h16l7-2 4-5 1-2v-7l-4-6-3-2z" fill="#040C0E"/>
                <path transform="translate(523,334)" d="m0 0h29l-2 6-14 19-10 14-3 3-1 3 30-1v5h-37l1-5 12-16 9-13 6-9 1-2-9 1h-18l1-4z" fill="#040B0E"/>
                <path transform="translate(956,252)" d="m0 0h16l9 5v5l-5-2-6-3h-12l-8 4-4 5-2 5v10l3 8 6 5 5 2h11l10-5h3l-1 4-7 5-8 2-11-1-10-6-6-9-1-4v-11l4-9 4-5z" fill="#040C0F"/>
                <path transform="translate(627,251)" d="m0 0 12 2 7 5v4l-5-2-11-4-11 2-7 6-3 6v12l4 8 6 5 3 1h11l11-5h2l-1 5-10 5-10 1-11-4-6-5-5-10v-13l5-10 7-6 5-2z" fill="#040C0F"/>
                <path transform="translate(1716,251)" d="m0 0h9l9 3 5 3v5l-5-2-6-3-9-1-10 4-5 6-2 5v10l3 7 4 5 7 3h11l10-5 3 1-2 4-10 5-10 1-11-4-8-8-3-8v-10l4-10 4-5z" fill="#040A0D"/>
                <path transform="translate(1e3 252)" d="m0 0h15l8 4 2 2-1 4-8-4-4-1h-10l-7 3-4 2-2 5-1 2v13l4 8 4 4 6 2h10l8-3 5-2-1 5-10 5-10 1-11-4-6-5-4-7-1-4v-12l5-10 8-6z" fill="#040F12"/>
                <path transform="translate(1301,333)" d="m0 0 10 1 8 5 2 2v3l-4-1-9-4h-11l-6 3-5 5-3 8 1 11 4 7 5 4 7 2 10-1 8-4h3l-1 4-9 5-5 1h-8l-10-4-7-7-3-6-1-10 2-8 4-7 6-5 6-3z" fill="#040C0F"/>
                <path transform="translate(1573,334)" d="m0 0h14l11 5 1 4-3 1-10-5h-11l-6 3-6 7-2 5v9l5 10 5 4 3 1h13l10-5h2l-1 5-6 4-8 2h-8l-10-4-5-4-5-10v-14l4-9 7-6z" fill="#040D10"/>
                <path transform="translate(1052,333)" d="m0 0 10 1 8 4 3 2v4l-5-2-8-3h-11l-6 3-6 7-2 6 1 11 5 8 7 4h13l9-4 3-1-1 5-6 4-8 2h-7l-9-3-8-7-3-5-1-4v-13l5-10 8-6z" fill="#040E12"/>
                <path transform="translate(1818,361)" d="m0 0h23l5 4 1 2v6l-5 5-4 1h-17l-3-1z" fill="#FEFDFD"/>
                <path transform="translate(1819,338)" d="m0 0h17l5 2 4 4 1 6-5 5-2 1h-21v-17z" fill="#FEFDFD"/>
                <path transform="translate(1426,252)" d="m0 0h22l1 1v36l-4 7-8 5-4 1h-7l-8-3-6-7-2-5v-5h3l6 10v2l9 3 10-2 5-6 1-6v-26l-17-1z" fill="#040A0D"/>
                <path transform="translate(1187,335)" d="m0 0h33v4h-29v18h28l-1 5h-27v21h-4z" fill="#040507"/>
                <path transform="translate(1325,252)" d="m0 0h37v4l-16 1-1 43-5 1-1-44-16-1-1-3z" fill="#040C0F"/>
                <path transform="translate(1812,252)" d="m0 0h4l1 11v33h27l1 3-1 2h-31l-1-1z" fill="#040B0E"/>
                <path transform="translate(1664,334)" d="m0 0 4 1v43h27v5h-29l-2-2-1-5v-41z" fill="#040B0E"/>
                <path transform="translate(803,252)" d="m0 0h37v4l-3 1h-13l-1 43-4 1-1-1v-44h-17v-3z" fill="#040A0D"/>
                <path transform="translate(1227,335)" d="m0 0h5v43h27v5h-29l-2-6-1-12z" fill="#041014"/>
                <path transform="translate(1781,258)" d="m0 0 3 3 10 22v2h-24l1-5 6-14z" fill="#FEFDFD"/>
                <path transform="translate(682,340)" d="m0 0 3 3 5 12 4 9v3l-23 1-1-2 11-25z" fill="#FEFDFD"/>
                <path transform="translate(1893,340)" d="m0 0 3 3 5 12 4 9v3l-24 1 3-9 8-18z" fill="#FEFDFD"/>
                <path transform="translate(1326,335)" d="m0 0h39l-1 3-4 1h-13v43h-3l-2-9-1-34h-14l-2-1z" fill="#040C0E"/>
                <path transform="translate(1269,252)" d="m0 0 4 1v43h28l-1 5h-30l-1-1z" fill="#040405"/>
                <path transform="translate(1266,334)" d="m0 0 5 1v47l-5 1z" fill="#040A0D"/>
                <path transform="translate(1460,252)" d="m0 0 4 1v48h-5v-48z" fill="#040A0D"/>
                <path transform="translate(1860,334)" d="m0 0 4 1v48l-5-1v-47z" fill="#041419"/>
                <path transform="translate(1749,252)" d="m0 0 4 1v47h-5v-47z" fill="#040D10"/>
                <path transform="translate(1038,252)" d="m0 0 3 1 1 39-1 9-5-1 1-47z" fill="#040B0E"/>
                <path transform="translate(533,178)" d="m0 0h12l4 2v8l-5 3h-11z" fill="#FEFDFD"/>
                <path transform="translate(589,177)" d="m0 0h13l3 1v9l-3 2h-13l-1-2z" fill="#FEFDFD"/>
                <path transform="translate(771,177)" d="m0 0h13l4 4v5l-3 3h-14z" fill="#FEFDFD"/>
                <path transform="translate(1365,196)" d="m0 0h14l3 2v7l-2 1h-16v-9z" fill="#FEFDFD"/>
                <path transform="translate(1794,147)" d="m0 0h3l-1 4-3 3-1 3-14 1 1-4 6-5z" fill="#040D10"/>
                <path transform="translate(1365,177)" d="m0 0h9l6 1v6l-1 1h-15l-1-5z" fill="#FEFDFD"/>
                <path transform="translate(1459,182)" d="m0 0 4 2 3 9v3h-12l1-5z" fill="#FEFDFD"/>
                <path transform="translate(977,182)" d="m0 0 3 1 3 9v4h-11l1-6z" fill="#FEFDFD"/>
                <path transform="translate(1964,182)" d="m0 0 3 1 4 12-1 1h-11l1-5z" fill="#FEFDFD"/>
                <path transform="translate(838,182)" d="m0 0 3 1 3 9v4h-11l1-6z" fill="#FEFDFD"/>
                <path transform="translate(1079,238)" d="m0 0h4l-1 4-3 4h-5l2-5z" fill="#040709"/>
                <path transform="translate(305,275)" d="m0 0 4 1 2 2-1 3-5-1z" fill="#04181D"/>
                <script xmlns=""/><script xmlns=""/></svg>

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/UNAL_Logosimbolo.svg/583px-UNAL_Logosimbolo.svg.png" width="90">

            <img  src="https://gaia.manizales.unal.edu.co/gaia/images/LogoGaiaCuadrado.png" width="80">
        @endif

    </div>

</div>
