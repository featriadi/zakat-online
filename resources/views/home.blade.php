        @extends('dashboard.master')
        @section('content')
        <!-- Banner -->
        <section id="banner">
                    <div class="inner">
                        <h1>Zakat Online : <span><br/>
                        Solusi Zakat Modern</span></h1>
                        <ul class="actions">
                            <li><a href="{{url('/tentangzakat')}}" class="button alt">Pelajari Zakat</a></li>
                        </ul>
                    </div>
                </section>

        <!-- Three -->
        <section id="three">
                    <div class="inner">
                        <article>
                            <div class="content">
                                <span class="icon fa-laptop"></span>
                                <header>
                                    <h3>Tempus Feugiat</h3>
                                </header>
                                <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna lorem ullamcorper laoreet, lectus arcu.</p>
                                <ul class="actions">
                                    <li><a href="#" class="button alt">Learn More</a></li>
                                </ul>
                            </div>
                        </article>
                        <article>
                            <div class="content">
                                <span class="icon fa-diamond"></span>
                                <header>
                                    <h3>Aliquam Nulla</h3>
                                </header>
                                <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed.</p>
                                <ul class="actions">
                                    <li><a href="#" class="button alt">Learn More</a></li>
                                </ul>
                            </div>
                        </article>
                        <article>
                        <div class="content">
                                <span class="icon fa-laptop"></span>
                                <header>
                                    <h3>Sed Magna</h3>
                                </header>
                                <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
                                <ul class="actions">
                                    <li><a href="#" class="button alt">Learn More</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </section>

          <!-- Main -->
                <section id="main">
                    <div class="inner">
                        <!-- Table -->
                            <section>
                                <h2>Tentang Zakat</h2>
                                <div class="table-wrapper">
                                    <table class="alt">
                                        <thead>
                                            <tr>
                                                <th>Jenis Zakat</th>
                                                <th>Deskripsi</th>
                                                <th>Jumlah Nisab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Zakat Fitrah</td>
                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                <td>29.99</td>
                                            </tr>
                                            <tr>
                                                <td>Zakat Mal</td>
                                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                <td>19.99</td>
                                            </tr>
                                            <tr>
                                                <td>Zakat Penghasilan</td>
                                                <td> Morbi faucibus arcu accumsan lorem.</td>
                                                <td>29.99</td>
                                            </tr>
                                            <tr>
                                                <td>Pertanian</td>
                                                <td>Vitae integer tempus condimentum.</td>
                                                <td>19.99</td>
                                            </tr>
                                        </tbody>
                                        <!--<tfoot>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td></td>
                                            </tr>
                                        </tfoot>-->
                                    </table>
                                </div>
                            </section>
                    </div>
                </section>
        @endsection