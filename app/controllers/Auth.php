<?php

	namespace controllers;

	class Auth extends Controller{
		public function login($userData = [])
		{
			if  ($this->model('Auth',$userData, 'authenticate')) {
				return true;
			} else {
				return false;
			}
		}

	}