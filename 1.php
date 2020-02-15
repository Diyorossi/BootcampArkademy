<?php
//Biodata
	$nama = "Denlei Diyorossi";
	$umur = 22;
	$address = "Jl Mertojoyo Selatan Blok C 10 No 01";
	$hobbies = ["Movies", "Photos & Travelling", "Design & Editing", "Drawing"];
	$is_married = false;
	$list_school = [
					["name" => "SD N 06 Sukaresmi",
					"year_in" => "2003",
					"year_out" => "2009",
					"major" => null
					],
					["name" => "SMP N 03 Cikarang Selatan",
					"year_in" => "2009",
					"year_out" => "2012",
					"major" => null
					],
					["name" => "SMA N 01 Cikarang Selatan",
					"year_in" => "2012",
					"year_out" => "2015",
					"major" => "IPA"
					],
					["name" => "Brawijaya University",
					"year_in" => "2015",
					"year_out" => "2019",
					"major" => "Teknik Informatika"
					]
					];
	$skills = [
				["skill_name" => "HTML",
				"level" => "advanced"
				],
				["skill_name" => "CSS",
				"level" => "advanced"
				],
				["skill_name" => "PHP",
				"level" => "advanced"
				],
				["skill_name" => "Javascript",
				"level" => "advanced"
				]
				];
	$interest_in_coding = true;

function mybiodata($nama, $umur, $address, $hobbies, $is_married, $list_school, $skills, $interest_in_coding){
	$data = array('name' => $nama, 'age' => $umur, 'address' => $address, 'hobbies' => $hobbies, 'is_married' => $is_married, 'list_school' => $list_school, 'skills' => $skills, 'interest_in_coding' => $interest_in_coding);
	echo json_encode($data);
}

echo mybiodata($nama, $umur, $address, $hobbies, $is_married, $list_school, $skills, $interest_in_coding);