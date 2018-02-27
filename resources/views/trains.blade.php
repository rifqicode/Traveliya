@extends('layouts.navbar')

@section('content')

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/train.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<!-- <a href="index.html" id="main-logo">Travel</a> -->
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#singletrip" aria-controls="singletrip" role="tab" data-toggle="tab">Single Trip</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#roundtrip" aria-controls="roundtrip" role="tab" data-toggle="tab">Round Trip</a>
								      </li>

								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="singletrip">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<form class="" action="{{ url('/train/find')}}" method="post">
													{{ csrf_field() }}
													<input type="hidden" name="type_trip" value="Single_Trip">
												<div class="input-field">
													<label for="from"><a>Dari  :</a></label>
													<input type="text" name="from" class="form-control" placeholder="Kota/Stasiun"/>

												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from"><a>Tujuan    :</a></label>
													<input type="text" name="destination" class="form-control"placeholder="Kota/Stasiun"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<div class="input-field">
													<label for="date-start"><a>Tanggal Berangkat   :</a></label>
													<input type="text" id="datepicker" placeholder="dd-mm-yyyy"name="departure_date[]" class="form-control" />
												</div>
											</div>

											<div class="col-sm-12 mt">
												<section>
													<label for="class"><a>Kelas    :</a></label>
													<select name="class" class="form-control">
														<option value="">Pilih Kelas</option>
														<option value="ekonomi">Ekonomi</option>
														<option value="Bisnis">Bisnis</option>
														<option value="firstclass">First Class</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												
												<section>
													<label for="class"><a>Dewasa   :</a></label>
													<select class="form-control" name="adult" >
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class"><a>Anak-anak    :</a></label>
													<select name="child" class="form-control">
														<option value="0">0</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
                            <option value="4">4</option>

													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Cari Kereta">
											</div>
										</form>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="roundtrip">
									 	<div class="row">
                    <div class="col-xxs-12 col-xs-6 mt">
										<form class="" action="{{ url('/train/find') }}" method="post">
											{{ csrf_field() }}

											<input type="hidden" name="type_trip" value="Round_Trip">
											<div class="input-field">
												<label for="from"><a>Dari  :</a></label>
												<input type="text" name="from" class="form-control" placeholder="Kota/Stasiun"/>
											</div>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<div class="input-field">
												<label for="from"><a>Tujuan    :</a></label>
												<input type="text" name="destination" class="form-control"placeholder="Kota/Stasiun"/>
											</div>
										</div>

										<div class="col-sm-12 mt">
											<div class="input-field">
												<label for="date-start"><a>Tanggal Berangkat   :</a></label>
												<input type="date" id="datepicker" name="departure_date[]" class="form-control" />
											</div>
										</div>
										
										
									
									
										<div class="col-sm-12 mt">
											<div class="input-field">
												<label for="date-start"><a>Tanggal Pulang   :</a></label>
												<input type="date" id="datepicker" name="departure_date[]" class="form-control" />
											</div>
										</div>

										<div class="col-sm-12 mt">
											<section>
												<label for="class"><a>Kelas    :</a></label>
												<select name="class" class="form-control">
													<option value="">Pilih Kelas</option>
													<option value="ekonomi">Ekonomi</option>
													<option value="Bisnis">Bisnis</option>
													<option value="firstclass">First Class</option>
												</select>
											</section>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<section>
												<label for="class"><a>Dewasa   :</a></label>
												<select class="form-control" name="adult" >
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
											</section>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<section>
												<label for="class"><a>Anak-anak    :</a></label>
												<select name="child" class="form-control">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>

												</select>
											</section>
										</div>
										<div class="col-xs-12">
											<input type="submit" class="btn btn-primary btn-block" value="Cari Pesawat">
										</div>
								 </form>
               </div>
            </div>
									
									</div>

								</div>
							</div>
							
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
								<p>Indikuy </p>
									<h2>Traveliya Train</h2>
									<h3>Traveliya menyediakan jasa pemesanan tiket kereta secara online yang handal, mudah, dan terpercaya.</h3>
									<span class="price">Rp.15.000,-</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Pesan Tiket Kereta</h3>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12 animate-box">
						<h2 class="heading-title"></h2>
					</div>
					<div class="col-md-6 animate-box">
						<div class="row">
							<div class="col-md-12">
								<h4>Traveliya Train</h4>
								<p>Traveliya menyediakan jasa pemesanan tiket kereta secara online yang handal, mudah, dan terpercaya.</p>
							</div>
							<div class="col-md-12">
								<h4></h4>
								<p></p>
							</div>
							<div class="col-md-12">
								<h4></h4>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<img class="img-responsive" src="images/cover_bg_3.jpg" alt="travel">
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Jakarta</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>HK-MNL</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										Rp.15.000,-
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Bandung</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>HK-MNL</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										Rp. 12.000,-
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Depok</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>MNL-HK</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										Rp.10.000,-
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Tanggerang</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>HK-LAS</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										Rp.10.000,-
									</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Jakarta</h3>
								<span>3 nights</span>
								<span class="price">Rp.15,000</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Bandung</h3>
								<span>4 nights</span>
								<span class="price">Rp.15.000,-</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Depok</h3>
								<span>2 nights</span>
								<span class="price">Rp.15.000,-</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Bekasi</h3>
								<span>3 nights</span>
								<span class="price">Rp.15.000,-</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-5.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Tanggerang</h3>
								<span>4 nights</span>
								<span class="price">Rp.15.000,-</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Bogor</h3>
								<span>2 nights</span>
								<span class="price">Rp.15.000,-</span>
								<a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Traveliya</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Pilih rute yang sesuai dengan jadwal, harga, & tujuan yang anda inginkan. Isi detail penumpang lalu pilih kursi penumpang.&rdquo;</p>
						</blockquote>
						<p class="author">Jadwal  <span class="subtext"></span></p>
					</div>

				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Pilih metode pembayaran yang sesuai dengan Anda lalu ikuti langkah-langkahnya hingga selesai. Agar lebih mudah ikuti instruksi cara pembayaran.&rdquo;</p>
						</blockquote>
						<p class="author">Pembayaran <span class="subtext"></span></p>
					</div>


				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Setelah pembayaran selesai, Anda akan menerima e-Tiket atau voucher. Mohon periksa email Anda.&rdquo;</p>
						</blockquote>
						<p class="author">Tiket/Voucher  <span class="subtext"></span></p>
					</div>

				</div>
			</div>
		</div>
	</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>About Travel</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Flights Routes</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Hotels</h3>
							<ul>
								<li><a href="#">Boracay Hotel</a></li>
								<li><a href="#">Dubai Hotel</a></li>
								<li><a href="#">Singapore Hotel</a></li>
								<li><a href="#">Manila Hotel</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Interest</h3>
							<ul>
								<li><a href="#">Beaches</a></li>
								<li><a href="#">Family Travel</a></li>
								<li><a href="#">Budget Travel</a></li>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Honeymoon and Romance</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Best Places</h3>
							<ul>
								<li><a href="#">Boracay Beach</a></li>
								<li><a href="#">Dubai</a></li>
								<li><a href="#">Singapore</a></li>
								<li><a href="#">Hongkong</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Affordable</h3>
							<ul>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Fare Flights</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016   <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by </a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>



	</div>
	<!-- END fh5co-page -->

	</div>

@endsection
