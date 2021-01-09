<h1 style="text-align: center">
	Starterpack Laravel 7 dengan vue Js 2 
</h1>

<p>dalam repo ini sudah terdapat laravel versi 7 dengan vue js yang telah terpasang package , list package yang telah telah terpasang : </p>
<ul>
	<li>
		<strong>Purple admin :</strong>
		<p>
			sedikit mencoba menggunakan admin template selain adminlte
		</p>
	</li>
	<li>
		<strong>Vue js Modal :</strong>
		<p>
			Mencoba menggunakan modal selain bawaan bootstrap ? . kita dapat mencoba dengan package yang satu ini , masalh yang di hadapi dalam package ini adlah , resposivitas kelebaran saja 
		</p>
	</li>
	<li>
		<strong>animate.css :</strong>
		<p>
			memudahkan untuk membuat efek animasi /  transisi  
		</p>
	</li>
	<li>
		<strong>moment.js :</strong>
		<p>
			Mengubah format pennulisa waktu agar lebih dapat di baca
		</p>
	</li>
	<li>
		<strong>Multiselect  :</strong>
		<p>
			membuat select box dengan pencarian di dalamnya 
		</p>
	</li>
	<li>
		<strong>VueCarousel  :</strong>
		<p>
			Membuat image slider carousel 
		</p>
	</li>
	<li>
		<strong>VueMask  :</strong>
		<p>
			untuk masking input , tapi yang satu ini belum benar benar di pakai , karna tujuan seblumnya menggunakan ini untuk masking uang , namun kini sudah memkai package lainya
		</p>
	</li>
	<li>
		<strong>v-money  :</strong>
		<p>
			untuk masking input uang , kita menggunakan v-money , 
		</p>
	</li>
	<li>
		<strong>swal  :</strong>
		<p>
			Menggunakan sweetAlert untuk membuat toast /  pop up yang cenderung untuk memberikan informasi 
		</p>
	</li>
	<li>
		<strong>vform  :</strong>
		<p>
			memudahkan melakukan proses pengiriman ui error dari laravel ke vue js 
		</p>
	</li>
	<li>
		<strong>VueProgressBar  :</strong>
		<p>
			Membuat progress bar di atas page , progress ini bisa di gunakan untuk paramater proses pengimputan
		</p>
	</li>
	<li>
		<strong>laravel-vue-pagination  :</strong>
		<p>
			Hasil dari paginasi laravel di konsumsi oleh package ini  cukup memudahkan untuk proses penampilan paginasi pada data datanya 
		</p>
	</li>
</ul>

<h1>Sedikit Dokumentasi Pengodean </h1>
<p> untuk file vue pada stp ini terdapat pada folder </strong>resources/vue-views<br></p>
<ul>
	<li>Vue Js Router</li>
	<p>
		<strong>lokasi folder :  </strong>resources/js/kostum/router<br>
		untuk perutean kita membagi menjadi beberapa file , jelas file ini bisa di tambah jika di buthkan ataupun dikurangi jika tidak di butuhkan , untuk stp (starter pack) kita memiliki 4 file router yakni
		<ul>
			<li>admin-router.js</li>
			<li>client-router.js</li>
			<li>public-router.js</li>
			<li>non-login.js</li>
		</ul>
		dengan router utama yang akan menyatukan dan mengkondisikan router tersebut pada file :  <strong>router.js</strong>
		<ul> 
			<li>Admin router
				<p>
					dari namanya jelas file ini  di tujukan untuk user login dengan akses admin , untuk akses sendiri nantinya dapat di atur pada file router.js
				</p>
			</li> 
			<li>Client router
				<p>
					file ini  di tujukan untuk user login dengan akses uuser , untuk akses sendiri nantinya dapat di atur pada file router.js
				</p>
			</li> 
			<li>Public router
				<p>
					file ini  di tujukan untuk url yang dpat di akses baik untuk admin ataupun user , biasnaya url ini seperti , /home, /produk ataupun sejenisnsya 
				</p>
			</li> 
			<li>Non Login Router
				<p>
					file ini  di tujukan untuk user yang tidak login , untuk akses sendiri nantinya dapat di atur pada file router.js , untuk beberapa kasus ,biasa nya ada url url yang sudah tidak dapat di akses ketika login , misalnya ,url login itu sendiri , atau pun sejenisnya , namun semuanya balik lagi ke kebutuhan .
				</p>
			</li> 
		</ul>
	</p>
	<li>Vue Js Manajemen Akses user</li>
	<p>
		<strong>lokasi folder :  </strong>resources/js/kostum/akses.js<br>
		disini kita dapat mendefinisikan akses apa saja yang terdapat di aplikasi , nantinya akses ini bisa menentukan tampilan komponenya , misalnya untuk admin tampil A untuk user tampi B,
	</p>
	<li>Submit form </li>
	<p>
		untuk tombol submit isi form kita sarankan untuk menabahkan class 'btn-submit-data' dengan demikian saat kamu melakukan submit , button akan otomasi di disable selama proses submit berjalan.
	</p>
	<li>Pemberitahuan proses via Toast </li>
	<p>
		<strong>lokasi folder :  </strong>resources/js/kostum/alert/tost.js<br>
		untuk menghandle proses yang dikirim ke server , dalam file vue js nya kita bisa menambahkan funciton 
		<strong>this.$toast.df102()</strong> untuk menampilkan toast dengan text 'sedang proses' <br>
		toast ini terbagi dari beberapa function : 
		<ul>
			<li>df102</li>
			<p>untuk mengkonfirmasi bahwa proses sedang berjalan</p>
			<li>df200</li>
			<p>untuk mengkonfirmasi bahwa proses berhasil dilakukan</p>
		</ul>
	</p>
	<li>Pemberitahuan proses via Toast (error handling) </li>
	<p>
		<strong>lokasi folder :  </strong>resources/js/kostum/alert/catch.js<br>
		untuk menghandle response server dengan jenis error  , dalam file vue js nya kita bisa menambahkan funciton 
		<strong>this.$error.catch(responError)</strong> untuk menampilkan toast dengan text yang sesuai dengan error yang di repson , untuk menambahkan data respon error yang kita inginkan dapat dengan menuju folder  : </strong>resources/js/kostum/alert/catch.js<br>
	</p>
	<li>Melakukan konfirmasi penghapusan (sweetAlert)</li>
	<p>
		pada dasarnya saya menuliskan funciton ini karna males untuk menuliskan hal yang sama secara berulang ulang , jadi , ketika kita ingin menghapus filee , dalan memberikan konfirmasi apakah yakin ingin menhapus data ini atau tidk kita bisa cukup dengan memanggil 
		<p>konfirmasiHapus</p>
		contoh penggunaan <br>
		<i>
			konfirmasiHapus.fire().then((result)=>{ <br>
				if(result.isConfirme){ <br>
				melakukan penghapusan <br>
				}<br>
			})<br>
		</i>
	</p>

</ul>