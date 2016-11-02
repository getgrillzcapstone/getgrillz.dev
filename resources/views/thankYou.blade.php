@extends('layout.master')

@section('content')
    <div class="container">
			<div class="burger">
				<div class="frame">
				</div>
				<div class="bun top transp accordion closed">
					<span class="seed sesame one"></span>
					<span class="seed sesame two"></span>
					<span class="seed sesame three"></span>
					<span class="seed sesame four"></span>
					<span class="seed sesame five"></span>
					<span class="seed sesame six"></span>
					<span class="seed sesame seven"></span>
					<span class="seed sesame eight"></span>
					<span class="seed sesame nine"></span>
					<span class="seed sesame ten"></span>
					<span class="seed sesame eleven"></span>
					<span class="seed sesame twelve"></span>
					<span class="seed sesame thirteen"></span>
					<span class="seed sesame fourteen"></span>
					<span class="seed sesame fiveteen"></span>
					<span class="seed sesame sixteen"></span>
					<span class="seed sesame seventeen"></span>
					<span class="seed sesame eighteen"></span>
					<span class="seed sesame nineteen"></span>
					<span class="seed sesame twenty"></span>
					<span class="seed sesame twentyone"></span>
					<span class="seed sesame twentytwo"></span>
					<span class="seed sesame twentythree"></span>
					<span class="seed sesame twentyfour"></span>
					<span class="seed sesame twentyfive"></span>
					<span class="seed sesame twentysix"></span>
					<span class="seed sesame twentyseven"></span>
					<span class="seed sesame twentyeight"></span>
					<span class="seed sesame twentynine"></span>
					<span class="seed sesame thirty"></span>
				</div>
				<div class="avocado transp accordion closed">
					<div class="avocadoslice one">
						<div class="avocadohalfslice">
						</div>
					</div>
					<div class="avocadoslice two">
						<div class="avocadohalfslice">
						</div>
					</div>
					<div class="avocadoslice three">
						<div class="avocadohalfslice">
						</div>
					</div>
				</div>
				<div class="egg transp accordion closed">
					<div class="yellowslice">
						<div class="yellow">
						</div>
					</div>
				</div>
				<div class="onion transp accordion closed">
					<div class="onionslice">
						<div class="onionring">
							<div class="onionring">
								<div class="onionring">
									<div class="onionring">
										<div class="onionring">
											<div class="onionring">
												<div class="onionring">
													<div class="onionring">
														<div class="onionring">
															<div class="onionring onionheart">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bacon transp accordion closed">
					<div class="baconslice one">
						<div class="fat"></div>
						<div class="fat"></div>
						<div class="fat"></div>
					</div>
					<div class="baconslice two">
						<div class="fat"></div>
						<div class="fat"></div>
						<div class="fat"></div>
					</div>
				</div>
				<div class="cheese transp accordion closed">
				</div>
				<div class="meat beef transp accordion closed">
					<div class="meatslice">
						<span class="grill"></span>
						<span class="grill"></span>
						<span class="grill"></span>
					</div>
				</div>
				<div class="tomatoe transp accordion closed">
					<div class="tomatoeslice">
						<div class="tomatoecuarter one">
							<span class="seed tomatoeseed one"></span>
							<span class="seed tomatoeseed two"></span>
							<span class="seed tomatoeseed three"></span>
						</div>
						<div class="tomatoecuarter two">
							<span class="seed tomatoeseed one"></span>
							<span class="seed tomatoeseed two"></span>
							<span class="seed tomatoeseed three"></span>
						</div>
						<div class="tomatoecuarter three">
							<span class="seed tomatoeseed one"></span>
							<span class="seed tomatoeseed two"></span>
							<span class="seed tomatoeseed three"></span>
						</div>
						<div class="tomatoecuarter four">
							<span class="seed tomatoeseed one"></span>
							<span class="seed tomatoeseed two"></span>
							<span class="seed tomatoeseed three"></span>
						</div>
					</div>
				</div>
				<div class="lettuce transp accordion closed">
					<div class="leaf">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="leaf">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="leaf">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="leaf">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="trunk">
						<div class="trunkhalf">
							<span></span>
						</div>
						<div class="trunkhalf">
							<span></span>
						</div>
					</div>
				</div>
				<div class="bun bottom transp accordion closed">
				</div>
			</div>
	<p id="signature">Made with &#9825; by <a href="http://www.josesentis.com" target="_blank">Jose Sentis</a></p>
    <!-- Modal -->
    <div id="thankyouModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h2 class="modal-title text-center">Pleasure Doing Business With You!</h2>
            <h4 class="modal-title text-center">An Email Has Been Sent To You For Confirmation</h4>
          </div>
          <div class="modal-body modal-body-colored text-center">
              <h2>Now GetGrilling!</h2>
              <a href="/">
              <button class="btn btn-default addToOrderButton">
                  <h4>Go Back Home</h4>
              </button>
              </a>
          </div>
        </div>

      </div>
    </div>
</div>
@stop

@section('javascriptFileThankyou')
    <script src="/js/thankyou.js"></script>
@endsection
