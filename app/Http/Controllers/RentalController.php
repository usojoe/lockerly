<?php

class RentalController extends BaseController {


					public function __construct() {
						parent::__construct();
						$this->beforeFilter('csrf', array('on'=>'post'));
						$this->beforeFilter('auth', array('only'=>array('getIndex', 'postCreate', 'postCancel')));
						$this->beforeFilter('admin', array('only'=>array('getManage', 'postManage')));

					}

					public function getIndex() {
						return View::make('rentals.index')
							->with('rentals', rental::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10));
					}
					public function postCreate() {
						$validator = Validator::make(Input::all(), rental::$rules);
						if ($validator->passes()) {
							$rental = new rental;
							$rental->item_id = Input::get('item_id');
							$rental->user_id = Auth::user()->id;
							$rental->rent_from = Input::get('pick_up_date');
							$rental->rent_to = Input::get('drop_off_date');
							$rental->save();
							return Redirect::to('rentals')
								->with('message', 'Your rental has sent to us. Thank you!');
						}
						return Redirect::back()
							->with('message', 'Something went wrong')
							->withErrors($validator)
							->withInput();
					}
					public function postCancel() {
						$rental = rental::find(Input::get('id'));
						if ($rental) {
							$rental->status = 'Cancelled';
							$rental->save();
							return Redirect::to('rentals')
								->with('message', 'Your rental Cancelled');
						}
						return Redirect::back()
							->with('message', 'Something went wrong, please try again');
					}
					public function getManage() {

						return View::make('rentals.manage')
							->with('rentals', rental::orderBy('created_at', 'DESC')->paginate(10));
					}
					public function postManage() {
						$rental = rental::find(Input::get('id'));
						if ($rental) {
							$rental->status = Input::get('status');
							$rental->save();
							return Redirect::to('rentals/manage')
								->with('message', 'rental Updated');
						}
						return Redirect::back()
							->with('message', 'Something went wrong, please try again');
	}
}
