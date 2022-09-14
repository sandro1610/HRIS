<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Slip Gaji</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        .s1 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s2 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }
    </style>
</head>

<body>
    <div style="margin: 20px 78px;">
    <h2>PT. BUKIT ASAM KREATIF</h2>
    </div>
    @foreach ($gajis as $gaji)
    <div style="margin: 20px 78px;">
        <table>
            <tr>
                <td>Nama </td>
                <td>: {{$gaji->nama}}</td>
                <td><h3 style="padding-left: 420px; text-align: right;">{{$gaji->periode}}</h3></td>
            </tr>
            <tr>
                <td>NIP </td>
                <td style="width: 110px;">: {{$gaji->nip}}</td>
            </tr>
            <tr>
                <td>Jabatan </td>
                <td style="width: 110px;">: {{$gaji->posisi}}</td>
            </tr>
            <tr>
                <td>Departemen </td>
                <td style="width: 110px;">: {{$gaji->departemen}}</td>
            </tr>
        </table>
    </div>

    <table style="border-collapse:collapse;margin-left:45pt" cellspacing="0">
        <tr style="height:12pt">
            <td style="width:30pt;border-top-style:solid;border-top-width:2pt;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt"
                bgcolor="#D3DCE1">
                <p class="s1"
                    style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;line-height: 11pt;text-align: center;">
                    NO</p>
            </td>
            <td style="width:215pt;border-top-style:solid;border-top-width:2pt;border-bottom-style:solid;border-bottom-width:1pt"
                bgcolor="#D3DCE1">
                <p class="s1"
                    style="padding-left: 85pt;padding-right: 76pt;text-indent: 0pt;line-height: 11pt;text-align: center;">
                    KOMPONEN</p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:2pt;border-bottom-style:solid;border-bottom-width:1pt"
                bgcolor="#D3DCE1">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt;border-top-style:solid;border-top-width:2pt;border-bottom-style:solid;border-bottom-width:1pt"
                bgcolor="#D3DCE1">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-top-style:solid;border-top-width:2pt;border-bottom-style:solid;border-bottom-width:1pt"
                bgcolor="#D3DCE1">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:99pt;border-top-style:solid;border-top-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2" bgcolor="#D3DCE1">
                <p class="s1" style="padding-left: 25pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    NOMINAL</p>
            </td>
        </tr>
        <tr style="height:13pt">
            <td style="width:488pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:2pt;border-right-style:solid;border-right-width:1pt"
                colspan="7" bgcolor="#D3DCE1">
                <p class="s1" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    PENERIMAAN</p>
            </td>
        </tr>
        <tr style="height:13pt">
            <td
                style="width:30pt;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="text-indent: 0pt;line-height: 11pt;text-align: center;">1</p>
            </td>
            <td style="width:215pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 8pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Upah
                    Pokok</p>
            </td>
            <td style="width:69pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 11pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 11pt;text-align: right;">@currency($gaji->upah_pokok_bulan)</p>
            </td>
        </tr>
        <tr style="height:12pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: center;">2</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 11pt;text-align: left;">BPJS
                    Kesehatan Perusahaan</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;line-height: 11pt;text-align: right;">4%
                </p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 11pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 11pt;text-align: right;">@currency($gaji->bpjs_kesehatan_perusahaan)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;text-align: center;">3</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">BPJS Tenagakerjaan (JHT)
                </p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;text-align: right;">3,7%</p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->bpjs_ketenagakerjaan_jht)</p>
            </td>
        </tr>
        <tr style="height:9pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">4</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 8pt;text-align: left;">BPJS
                    Tenagakerjaan (JKK)</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;line-height: 8pt;text-align: right;">
                    1,74%</p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 8pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 8pt;text-align: right;">@currency($gaji->bpjs_ketenagakerjaan_jkk)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;text-align: center;">5</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">BPJS Tenagakerjaan
                    (JKM)</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;text-align: right;">0,3%</p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->bpjs_ketenagakerjaan_jkm)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;text-align: center;">6</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">BPJS Tenagakerjaan (JP)
                </p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;text-align: right;">2%</p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->bpjs_ketenagakerjaan_jp)</p>
            </td>
        </tr>
        <tr style="height:12pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: center;">7
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                    Pengembalian Potongan PPH</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 11pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 11pt;text-align: right;">-</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p class="s1" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">TOTAL PENDAPATAN</p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p class="s1" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s1" style="text-indent: 0pt;text-align: right;">@currency($gaji->upah_pokok_bulan + $gaji->bpjs_kesehatan_perusahaan + $gaji->bpjs_ketenagakerjaan_jkk + $gaji->bpjs_ketenagakerjaan_jkm + $gaji->bpjs_ketenagakerjaan_jht + $gaji->bpjs_ketenagakerjaan_jp)</p>
            </td>
        </tr>
        <tr style="height:16pt">
            <td style="width:488pt;border-left-style:solid;border-left-width:2pt;border-right-style:solid;border-right-width:1pt"
                colspan="7" bgcolor="#D3DCE1">
                <p class="s1" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">PENDAPATAN TIDAK TETAP
                </p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:30pt;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;text-align: center;">8</p>
            </td>
            <td style="width:215pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Upah Lembur dan SPKL
                </p>
            </td>
            <td style="width:69pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;text-align: right;">180</p>
            </td>
            <td style="width:20pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;text-align: center;">X</p>
            </td>
            <td style="width:55pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;text-indent: 0pt;text-align: left;">18.000</p>
            </td>
            <td style="width:44pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->total_lembur)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 1pt;text-indent: 0pt;text-align: center;">9</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Tunjangan HM</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->tunjangan_HM)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">10
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Tunjangan Kinerja ( 4
                    Jam)</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->tunjangan_kinerja)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">11
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Uang Saku</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->uang_saku)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">12
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Tunjangan Kehadiran</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->tunjangan_kehadiran)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    13</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Tunjangan Makan</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->tunjangan_makan)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    14</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Tunjangan Field</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->tunjangan_field)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    15</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Tunjangan Komunikasi</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->tunjangan_komunikasi)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    16</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Tunjangan Unit</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->tunjangan_unit)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">17
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Kurang Bayar</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->kurang_bayar)</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p class="s1" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">TOTAL PENDAPATAN TIDAK
                    TETAP</p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p class="s1" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s1" style="text-indent: 0pt;text-align: right;">@currency($gaji->total_lembur + 
                                                                                    $gaji->tunjangan_kinerja +
                                                                                    $gaji->tunjangan_kehadiran +
                                                                                    $gaji->tunjangan_HM +
                                                                                    $gaji->tunjangan_field +
                                                                                    $gaji->tunjangan_komunikasi +
                                                                                    $gaji->tunjangan_unit +
                                                                                    $gaji->uang_saku +
                                                                                    $gaji->tunjangan_makan +
                                                                                    $gaji->kurang_bayar
                                                                                    )</p>
            </td>
        </tr>
        <tr style="height:16pt">
            <td style="width:488pt;border-left-style:solid;border-left-width:2pt;border-right-style:solid;border-right-width:1pt"
                colspan="7" bgcolor="#D3DCE1">
                <p class="s1" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">POTONGAN RUTIN</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:30pt;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">18
                </p>
            </td>
            <td style="width:215pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Iuran BPJS Kesehatan
                    (Karyawan)</p>
            </td>
            <td style="width:69pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;text-align: right;">1%</p>
            </td>
            <td style="width:20pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->iuran_bpjs_kesehatan_karyawan)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    19</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Iuran
                    BPJS Kesehatan (Perusahaan)</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: right;">4%
                </p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->iuran_bpjs_kesehatan_perusahaan)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    20</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Iuran
                    BPJS Ketenagakerjaan (Karyawan)</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: right;">3%
                </p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->iuran_bpjs_ketenagakerjaan_karyawan)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    21</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Iuran
                    BPJS Ketenagakerjaan (Perusahaan)</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: right;">
                    7,74%</p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->iuran_bpjs_ketenagakerjaan_perusahaan)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2"
                    style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    22</p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Potongan PPH 21</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->iuran_pph_21)</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:215pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9">
                <p class="s1" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">TOTAL
                    POTONGAN RUTIN</p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9">
                <p class="s1" style="padding-right: 12pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Rp
                </p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s1" style="text-indent: 0pt;line-height: 12pt;text-align: right;">@currency($gaji->iuran_bpjs_ketenagakerjaan_karyawan+$gaji->iuran_bpjs_ketenagakerjaan_perusahaan+$gaji->iuran_bpjs_kesehatan_karyawan+$gaji->iuran_bpjs_kesehatan_perusahaan+$gaji->iuran_pph_21)</p>
            </td>
        </tr>
        <tr style="height:16pt">
            <td style="width:488pt;border-left-style:solid;border-left-width:2pt;border-right-style:solid;border-right-width:1pt"
                colspan="7" bgcolor="#D3DCE1">
                <p class="s1" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">POTONGAN LAIN – LAIN
                </p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:30pt;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">23
                </p>
            </td>
            <td style="width:215pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Lebih Bayar</p>
            </td>
            <td style="width:69pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->lebih_bayar)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">24
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Unpaid</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s2" style="text-indent: 0pt;text-align: right;">@currency($gaji->unpaid)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">25
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Potongan Koperasi</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br />@currency($gaji->potongan_koperasi)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 7pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">26
                </p>
            </td>
            <td
                style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">Potongan Lain-Lain</p>
            </td>
            <td
                style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br />@currency($gaji->potongan_lain_lain)</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:30pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-left-style:solid;border-left-width:2pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:215pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p class="s1" style="padding-left: 9pt;text-indent: 0pt;text-align: left;">TOTAL POTONGAN LAIN -
                    LAIN</p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9">
                <p class="s2" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td
                style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#D9D9D9;border-right-style:solid;border-right-width:1pt">
                <p class="s1" style="text-indent: 0pt;text-align: right;">@currency($gaji->lebih_bayar + $gaji->unpaid+ $gaji->potongan_kopersai+ $gaji->potongan_lain_lain)</p>
            </td>
        </tr>
        <tr style="height:16pt">
            <td style="width:245pt;border-left-style:solid;border-left-width:2pt" colspan="2" bgcolor="#D3DCE1">
                <p class="s1" style="padding-left: 1pt;text-indent: 0pt;text-align: left;">GAJI DIBAYAR (TAKE HOME
                    PAY)</p>
            </td>
            <td style="width:69pt" bgcolor="#D3DCE1">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:20pt" bgcolor="#D3DCE1">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:55pt" bgcolor="#D3DCE1">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:44pt" bgcolor="#D3DCE1">
                <p class="s1" style="padding-right: 12pt;text-indent: 0pt;text-align: right;">Rp</p>
            </td>
            <td style="width:55pt;border-right-style:solid;border-right-width:1pt" bgcolor="#D3DCE1">
                <p class="s1" style="text-indent: 0pt;text-align: right;">@currency(($gaji->upah_pokok_bulan + $gaji->bpjs_kesehatan_perusahaan + $gaji->bpjs_ketenagakerjaan_jkk + $gaji->bpjs_ketenagakerjaan_jkm + $gaji->bpjs_ketenagakerjaan_jht + $gaji->bpjs_ketenagakerjaan_jp)+($gaji->total_lembur + 
                    $gaji->tunjangan_kinerja +
                    $gaji->tunjangan_kehadiran +
                    $gaji->tunjangan_HM +
                    $gaji->tunjangan_field +
                    $gaji->tunjangan_komunikasi +
                    $gaji->tunjangan_unit +
                    $gaji->uang_saku +
                    $gaji->tunjangan_makan +
                    $gaji->kurang_bayar
                    )-($gaji->iuran_bpjs_ketenagakerjaan_karyawan+$gaji->iuran_bpjs_ketenagakerjaan_perusahaan+$gaji->iuran_bpjs_kesehatan_karyawan+$gaji->iuran_bpjs_kesehatan_perusahaan+$gaji->iuran_pph_21)-($gaji->lebih_bayar + $gaji->unpaid+ $gaji->potongan_kopersai+ $gaji->potongan_lain_lain))</p>
            </td>
        </tr>
    </table>
    
    <div style="margin: 20px 55px;">
    <table>
        <tr>
            <td>Dibayarkan di : Tanjung Enim</td>
        </tr>
        <tr>
            <td>Pada Tanggal &nbsp;: 3 {{$gaji->periode}} 2022</td>
            <td style="padding-left: 300px; text-align: right;">Diterima Oleh,</td>
        </tr>
        <tr>
            <td><p style="color: white;">qew</p></td>
            <td style="padding-left: 300px; text-align: right;"><p style="color: white;">qwe</p></td>
        </tr>
        <tr>
            <td><p style="color: white;">weq</p></td>
            <td style="padding-left: 300px; text-align: right;"><p style="color: white;">ewqe</p></td>
        </tr>
        <tr>
            <td><p style="color: white;">qweqw</p></td>
            <td style="padding-left: 300px; text-align: right;"><p style="color: white;">eqwe</p></td>
        </tr>
        <tr>
            <td><b> LUVI NADILA</b></td>
            <td style="padding-left: 300px; text-align: center;"><b> {{$gaji->nama}}</td>
        </tr>
        <tr>
            <td>Staff Keuangan</td>
            <td style="padding-left: 300px; text-align: center;">{{$gaji->posisi}}</b></td>
        </tr>
    </table>
    </div>
    @endforeach
</body>

</html>
