@extends('layouts.page')
@section('title')
   Seminar Nasional | FAST UPB 2021
@endsection
@section('content')
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li>Kegiatan</li>
      </ul>
      <h3 class="breadcrumbs-custom-title">Seminar Nasional</h3>
    </div>
  </section>
      <!-- Section Who We are-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg-6">
              <h6>SEMINAR NASIONAL</h6>
              <h4>“Cyber Security Awareness dalam Rangka Pencegahan Ketelanjangan Data" <br> Festival Ajang Sinergisitas Teknologi Universitas Pelita Bangsas</h4>
              <p class="paragraph-inset-right-25">Seminar ini berjudul “Cyber Security Awareness dalam Rangka Pencegahan
                Ketelanjangan Data“ yang terfokus pada permasalahan yang terjadi sekarang yaitu
                kebocoran serta ketelanjangan data. Dengan harapan bahwasanya dengan
                permasalahan yang terjadi saat ini dapat menjadi bahan pembelajaran serta bahan
                evaluasi dalam dunia Cyber Security. Cyber Security adalah aktivitas untuk melakukan
                pengamanan terhadap sumber daya telematika demi mencegah terjadinya dampak dari
                Cyber Security. .</p>
                <h4>INFORMASI</h4>
                <br>
                <div>
                    <ul class="list list-md">
                        <li>
                            <div class="unit">
                              <div class="unit-left">
                                <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                  <div class="icon-rect-overlay"></div>
                                  <svg class="svg-icon-sm-1" role="img">
                                    <use xlink:href="images/svg/sprite.svg#tick"></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="unit-body">
                                <h5>Untuk informasi lebih lanjut, silahkan hubungi contact <br>
                                    Dezia : 0896-3114-9187 <br>
                                    Sarah : 0878-0437-8356
                                </h5>
                              </div>
                            </div>
                          </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-10 col-lg-6">
              <div class="img-separated"><img src="images/lomba/bg/semnas.jpeg" alt="" width="562" height="588"/>
              </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. TUJUAN KEGIATAN </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                1. Mengenal dan mengetahui definisi Cyber Security. <br>
                                2. Mengetahui Cyber Security dalam hukum pidana. <br>
                                3. Mengetahui dan memahami penanggulangan dan langkah-langkah dari dampak
                                Cyber Security.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. PEMATERI </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSEhIVFhUVGBcVFRcXFxcWFRcVFxcXFxcXFhUYHSggGBolHRUXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGi0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAIEBQYHAQj/xABFEAABAwIDBQQGBwYEBgMAAAABAAIRAyEEEjEFQVFhcQYTIoEycpGhsfAUIzNCUsHRByRisuHxNIKzwhVDY5Ki4jVzg//EABoBAAMBAQEBAAAAAAAAAAAAAAIDBAEFAAb/xAA1EQABAwMCBAQEBwABBQAAAAABAAIRAyExBEESUWFxE4GR8DKxwdEFIjNCoeHxFFJicoLC/9oADAMBAAIRAxEAPwDTEJiK5MhRDKp2QymEIhCaUS8hkLwhPheFblYhrwhPITXLCF5epwSASAWLyQTl4nrEaaQuSvEVHdag9lRdbhckxpiq8cH1v9RNpbpdROBQsWfCvA9DxLvCqCEC9o/Zu81UYX7Zys8M/wALh1+Cq8P9seixm6ypstWzRTdl/atUGkbDopmznfWt6oHYRNWpAT2poCc1Tpqe0J0LxqcsRILkworwmleWFZvHj94PqhZPbA+uPVa/aY/eP8qye2x9cqGJLlWZUkXKknQlLvhTU8pqiGVTsmOCYURyaVq8hleEJ5C8IRLExNfoiEJjkJXk6Egkmvqtb6TgOphectCevVCq7QblcWXLbXMSZItykaqur9qGM9NpHMhw9gIHI+aFFBV8uN7dcW4msOFSp73Sul4ftNhn2zxxkEAcifZ7VzTtPfFViCCC9xBFwQQDIO8J1HJSqswq7vynGqSFGCLuVJSFJwjrH53KBS+28lOwe9QhasOiBm6Y7AWmoGwU3AH6xnVQsN6IU3B+m3qEJFloWwC9avAnMUyciN1ToSaEQBYtQHhCKPUCC5eXiqHaY+vb6v5rKbfbFZbDadqzObT8Vle0TfrR0TmYSnKoyJI2VJPS4Xdimp5TAFHunppTSnleFEvIRSTl4VqwpqY7REKqdp7UALqbT4oIJIs3SZJtYGZ+RhC8E3G7aazS40mN/EXuBPzZU7qdSrL6njznwgkZQzXPYTJkEDlrAlUlGoa2IaMzss3iZIMxeNNBu81u6+EzgRbXpx08kFRwZkqilT4rjCzmGrNhwjIRIyiIIG+fRcLb5Ptk0W1q7Q5zGEEa5iQ1otcAGAD5cQtDW7NvcSJAnhOUco/qh0OxZBk1TxIG/rKJrmZla6k+IWFqhxMAuLtxk6cj+luC9qklozWIMG0eYvzNua6PS7OUgYy85Gqgba7K03AOaSDv3pnjtlAdI6LZXPa+GymxzAiQRpHnpomjRXeJ2UKVQ0KggOBdTeIknmeQsR5qnrU8uZvCQqGuDhZRPYWmCnYSpdRKn2w6fqlhDdeV/tW/PFY0LzsLU4P0QpdEXb1Ch4H0AprNW9QgKMLXtRGoNM2ujNUyaitRQExqMFiIINUIDgpNUIDgtasKoNs2q0zyIWZ7QfajotP2gb46cc1mdtsOdsprcIN1XQki5OSSbKBdwKYiocKVNTSvCE8ppRLEyE0hPK8K1Yhu0XNMbtYvqPeYs52QCxEEHMTvtMdF0La9fJRqPicrSY8lySo8lxM2vG7rA3SU2m0GULjC0HZ0jvm2vY+645D9V0PD3AXP+zOBe51pk3JI143K6LQGUCdylrNBeuhSJDITjTCC4brI2qFWbu3rI5IwVGeCE3EP8KJSbJugYoTovFsnC0lZrtVgxUol2jqZzNO/g73SsDUIezPpud1vceUa811DamGzU3NG9pC5PSfAc08b9QqtOIBCg1eQVHwpunYr7ViZh/STsb9oz53prcqY4WowB8IUwHTqFXYA+EKZm06hCUS2rBYdE9qbQ9EdAitClTkZiO0KMBwUmmZQlEEyqFGepdUKM8IgsKp9rVMr6ToBgmx00Wf7VY7vajDkY2BENEK97Qi1P1j8Fl9q3c3y+KYAMoZKhwkpOVJFxLIXZYTAipiUtTCmlPKaUS8mlJepLyxVnaCfo1YgSRTeR1DSfyXJzTJccsHhcQBfjzC7JiaYc0sOjgWnoQZ9y5dt/sjVwxblqZqRlrSQMwiCJPG+sbkym8SQtdSdAeMLW9k293TzVHtA4kgfIVliu0FAR9Zmk5QGB1SXawAwG/JU3ZLs7hnUWvfTa95mS4SbHcrirs1jK1J7GASXsMAavaTmNruOWJM+lG9JhhcQZ9+qql4aMbc0arjHZZDKnllYfY9wKrn7bcBJY/LpOXOR17suUnaWzaVYAPklttSJg2lthykbgFWvoGgXVhLsoLi2dYEAAaAkwEYa3AXpfkhGf2gpta2qKtMtvcOEG1xmnUSF4zFd6zPFQzcaMEbvTId5gFZ/G7DdWovxZE1HO7xjQIByxMAW8eUmd8hWmFwtGuwPJLmvYIGYgQR/Uoi1g33WcdQxIFxKK5z2izJnd3jSTws6FzvbFIitUlhZvymJh0EaEgiLyDC6J/w9rYDMxAgZfSEaRG7yWV7XUmCs7MIAohjMtgHUzoR1qZTwgplKBMKevxGAVjqJuiY70mfPBDZqiY/VnX9EQU5wr7C1IEIzq1lTPrlpXoxpRQvcS63g/QaeQ+CO0KLsszRpnixvwUxoUZT05qLk3jX4poCkNCWUYQSZCBUClVWqM9EFhVD2msxh/j+IKzOMPiC0fa8fUg8Ht/NZZrSSONvim/tQbqTCSlfQnpJPiDmm8B5LqxQoRih71qWvCmFPheEI1iavCvSElq8hv48L/r7ifcqjb01T9HDQZp5jxkAD4FwVyQhPwrS4VDZwtPFvApT7GVVQcC3hOyg7Ap5abREQNPirSphQ8ZTMa2MEEGQQdxBAIPJNw7FID8qFpMymFZ7adGs377HDi5hDvNzXQT0AUXDYGrVbldGQnxBgLSQDpnJPDcAeYUypU7+o4D0aZg8SdY6KU5rwPD4eibK9DcKVicOAwWAERHDdYLGVdnvpVHGk8Cm505S0Oa1xuS0SCATqJibq6xNatds+cX9qqe5eNST1mx/JeaIwtN8qxwtOrAJe3d6NMD+cuCyH7RKQb3UA/ebMkncbk3JNzJWm2XtBxcaThcCR0ET8Vnv2gAmlTd/1B/I9Gz4wk1wPDMLnu9SNoaN6qM83UjGnwMPNUBc8ouJ1HRDaiYnd0Q2IlhXYNgmcPS9RvwVgAq7s0ZwtH1ArIKNyoCI1SGoDFJaEtGEyoFGqtUt4UeoFrV4rOdrTFC/4mx7Vm6zdFqu1Lf3d3ItPvWXx5ADSnD4Uv9yJ4uJSUb6SOKSVBRyF2UhCIujFD3rVi8TSnlNK1YmFJOheELy8mwh4g1MjhTcGujwkjMAeYRiF4AtXgSMJmGdfqj12rP7D222s+qywfTe4ROrA4hrh5R8lXXeyEqCz8rlW1wdDmrMHC1mVKzaDw1zoqNkS0m4IPCY13c9Fb7OqUyyK/f5wBmGoJtOXLqPS9ik9zLs++IRHU2nUIg7mjIB5+SDiMDgyIz1R6VhO423Hl8gxie0tOKlNmFzguPic6wiBxuTJ3c1qcbTAOp9pVY6iM0xJ4m59qMOCxzLfEUzY2Gyl73ElwGWd5JiT7lnP2h1Yp0qe8vLvJrSD73havvQwEkwB4iTpYLl3aTav0iuXicg8LOg3xzPuhFSEulI1DgGRzVLU1UjGfZt6qNUN1KqCaM8P1VChRMQLN6ITUV5lrTyQmrVi672T/wAJR9X8yrcKl7GmcHS6H+Yq8hSOyVSMJzApDUJgRWhKKMLx4QagUh4QHha1YVRdqB+7VPL4hYjtD9kyPxBbntQP3aqeA/Nc72xig6kADcEKhgslPKZ3R4pKNnSQwjlfQiEdURMcLpZWpJqcktWJsJL1eQtWLxQtsYzuaFSrN2tOX1jZo9pCm4rwWI8USG6nhJH3R1hcp7U7Xr1CWvc7IKhplpaG5XgAtJDSZETB5p1Oi5x6JNSs1m91T4XGPo1G1aboc3SbyN7XcQuk7B7QU8Q2R4X/AHmHUcSOI5rmDhIn2/qvKFVzHAtcWkGQ4atduI+EbwSFXW07ag5HY/dI0+pdSMZG4+3vouzjERfdvR2VWkWNlzvZPbEfZ4gZXj7w9B3PkeSvmbRpuu10cwdfJcxzHNMOC7DKjXiWlW+MyzuVLicW1vBRsbihH2x/8VSPqlxIZMb3LQFr3nCqe2G33F3cMMC3ecD/AA8+f91ngARI8x+fRT+0WFl2Zu4R1UbYDorMJ0Bk7z7N/RW0gC2Fza5IdKra3pKWPsD8710Ta37P6Vcithn93PpMAzNJ40pcIn8JMcEbZn7M6dSmaZxFQGYMsY0A665jPRJdWa0gHJ6ewjp0nVGF7cDqB/HsdVzr/ls6IQXStp/smxDKU0a7KuXcWlhPKZInrboueYrCVKTslWm+m78L2lp8gdeqYHAmAlxAXUuwpnB0+Rf/ADFXwCzf7O/8GOT3/FaaFM4XTm4Tmo7EIBGppRTQk4IDwpTgo7wtasKo+1Lf3Wt6hXIapsuxdpm/utb1CuN1DZU0/hKQ/IUi6SbIXqCAiX0WmPRExwSyjXi8KciUaOaeARASYCFxAElCYySrrAYBgGbNJOhaYHkd/VUbXNfILrTbUKbRFSlZptrBv79UAa5zoLHDvwgRzgmfW8bCV4vYBZ7T2k+UgEeVr7mFFxVEMr+nlnw/ddTvufF2nS5mfJUPaTYlPEsIJDKhByvF2kiQDukA9DfnfQ7SrVKjZNN0t/CBBG8wbnpcLPYqg5kvpuEauY+Q082vuabr8COgSuGvSqtYJIm32kdPsraQ0tWg6oYBi9pj/ug364OOi5TXwtSlUdRqNio06biDpHEHd/denCG5iwEmxsBqCQIEc10LauzaeLaHejVpGA42c0xOSoBxFwQY0IJVf9CY7D92AKVdjcjiSGd5bxNedHzwOs2XfaQY/wA93XzrgQTO3K4PY8ouFiK+DkGSJbbodRJ3f0U3Z+HzgiS17fSA4bnBvA8lKZs17hliKrWxTP3arRrScfxR6J5dCpNIg087WGWDxelmpHeXNFww7y0dQLyOopDGCmaauQZFx7wo9GhTH2jzPD5/RSKtQBvhEN+bp1DFZxIEtiQbExxltiOfG2qDVOY8vncuZUaWmD79+vRdqnDgDzvcR/vcWUB2HzAkhU2zsP8AXxOW5g+8e381rKkBqE/Ygd9Y3NnYLsDZzgTaZ8J11G7jANejaXAnlCg17gwtbuZU/tDt2thqGHNKoGvLsuXK1zKjA2c1xIgwLETmOsWPsLtDUxFWnnytFQgVHjc82zODbEAZd2YcTCz+Gw3fucyrq8xSIkikW6Ux/BBB/wA06qdsDDupu+jvA75rsuTeJdeTwjxg8COKcIYCTaFIG+JDYmY8/f8AC6tRwWLw5NxUZfQzERYjnuSecPVa5tSmxzHjMW1GB9OQSCcrtDpcX0VfiX1qbS6hVcx7YhrpLXgR4HN32FuUgG9m4bbFLEtBDMlRr/G2fCM4Lbb4IJPVoXDFd1Z1Oq5sSRtY3j7Lu/8ABFKm9rHcQaNsttIzsYsZM4nk7CbAZQzMoNytLi7JmJAJ1DS4zG+CT10Ca5kGDYjULRV8bTIyggOyNmN1yNTwgnoVW1qBdNgMuY24NIt7/eragaOnf3uudTcec9VAARmJhaRYojFORCoBkL0hBcFIQXBeaFqpu0Tf3at6jvguLv0Xb9ut+oq+o74LiVTRU08FIeh50kCUlsL0r6dTXBPXjkgpq9o0i4wP7DeSvMbjqYHdtuT4QeMibdePNAxIJhgJGYHzIgx758lX15EFzZLXAmJMiDpzF/YOKNtNwLahbxMn82bdfmsBY/ipB/DUiWzEE3gAm2QBsRM3uroltINOWZtI1539p/yo7cUJGYkDzg23xpxlVj8U0gNk3vfQ9Of6pzXOERfSQb6cPKyfX1TG1XU6jZaALgY8+toU2n0D6lBlSm7heSbE/FB+n5ic8rbWGI2iKcZwSDo6czT57jyKblp1ZyFrgfSY6xM2kTad2t+Sqq7oOam6NczDdpG4nh71Z/8ACGVKYdTb3VSx4NO/XQ8iI03Jg0mnDGvac/uGPMclKdTqfGdTc2I/abHyd5b2/mIT9jGkYblO6gTreScNUOjmG5YSfCbX+9B2jstlYCoxsCo0BzSIPsOhGnIhT61Z4+qrsIzTxEixkOG8G4cNCAdy82HtEuqOoVQQ+C4SAA8g+IgaQ7w1Or3j7pWuFRsOJ8/n7+5RsNJ8sA5SPl6Y7WxCyWEwxY40nyWnTqOPBwO9R34R7cQ1zTFQEFlRsDvBwcNJi0b9LSI2+0sAKgtGYAlv8QB8TTzH5rL13w4Nc2TlmeLOnEfOqpfXa6nxVLRE+eD7+aRR0dTxvDpXkEgdReP7vB2IlR9udm6D/rqL/oteZc0NJpOdIDnZR6JvciLayqPG7MrMI+kU8pBvUZem694cAchPBwgnSFpdvVndwKjPE6mWuG/Mze0njB14SLyibI22HtzNOdji0On0mQIII3/d9h4rzaJDSQJ2I5jaChdqwSGlxAyCP2mLyPdp7rN4LCnNJgta0vDtzjoBvgi8i+m8EEztjY403PcaWYQbjWba7gIAHkp5oUWPZ3ZPd1S5haf+W958Ej7rS5pYPXHBLDYE03OaR+VuYQ6ZlKHMg53yj19XUDgqAiCNsefpj7qLtDA0nu7yi6AXBxIF2uPimPMmPXC0v/DWVMmIyjv2+Axq7KHQI+8QC4jkTxVQNnBzppEZmicvGD/Qq1rVQx9GqGlp9Bxiw4ZuYd7Q7kvVdOC6AZBnPPke6yjqi1pcRBEHynI7fbmpmLEHK7Rwt56LMYrAOw9dlVsFlaWWsA/XxDcQ8D/vK12KcMRRLhAqsJMX9FpEjykezmi7U2Z32EyzDxlc0nUOEZZI1jSd8BS06VKlRbReLAwR9R65VZr1nV36ikbltjzH/SRjI971b8K7uW1fTzueDx8dbIwHo13xV5lysad+R0/5spP5oex6rW06dJxGYveAN/hqFxIHC49o4qTjfCY3GPZvC5v4i9zmBvIxI6kK7RUgx3EBEiY9frY9lBq4UPzxY0wSebQSwCeMMnzUCmrejUyl0EXgOJ0zECf+1pLuruSqqkioGgeF0kHlNo5fFVDTVHDM9eY59/fRTHVUmdB8jy7J0IbgjubFiguCSBCpVZthv1NT1HfArhtQWXd9ptmm/wBV3wK4a6mMkqmngpD8quhJewkiQr6gTXIX1g3A9D+qG/EERma4eUj2hSkqiEsbTJaC0kPacwgWkbid0yvKWNpVmjMwsdEG4/P80XD1762dMfA/BEo7PGYmBH630XW0jWNwbwD52x5W6rja573iHNsDAMbbg+dxyJPNVuK2YYAbUIyzAcy8TYSHRbpvQ2MrD7zHRukg6aEHQrY/QWxOmhLTpzjhPzvUXF7Ha4SLOExu6ArzDR8Q1DkiDNxboirf8s0G0WkQ0lwizhI2Njuf8EKmoOfINWk6LSR4rT+IfBap7WspnKSAASLTA1kA8NYVXhyQBJMjjqOsaq3y5gCeG7QqAUxT4mssJxtOJ/hdLxvF4XVBJ5wJImY2FpOB3BVZgsdmBbVyul1oEtIOljp/VVfaDYwAbWoWqUnZmNJiHQQW30a4EtM8Z3BWtbYrdWEtPFpty8Jsob6tSn9W9pcDJEDxSdLb7jdxKlY7UNBa5s9R9fuq3soVHBzXR0NvIbeU9lm6m1CKzYkd5BANi2qRoRuJLXtPUKBtmlD21RMOufgY6gA9VL7WbPfVpZ6B+spkPaPxFpDsvImLdeCGKor0GuGlQB4/hfvHtkf5l0A4arTtDxwkgeoP1CgpuOg1Ze08QBMjo4fMGe4Vcyu6k4geJh8RF4JPpNj53KNiMAQBVpnJ4h426brVBw3T11Gk3D4YPESbCBz+bImzKmRxpvHgqAtc06DgfiPNdEUalKrxUzLd28urceg69hy3a2jqdOW1mxUHwvH7gI/I7N4mHHMNEm5MChFYmlVblqFrmu/C8biPOD06rR7BrDE0g19qrJY5x3uZYhw48VlsTT7uscO90/fw9Ti2xyE9beXNXOy8U17nnR9i8cXDw5/MRPqrKpFSHN7diP6t/USNJjqM03DkY5tPL+DzBtYhTabAyo5wEOuDw4X4/wBFJr4gOp1KZEyAfZ94fO/foo+064c7NvcDmtaRv8wfdzUPvCTItHj8gdfnguRSGobXquAkAg8POYMtOx+Y6lfQ1ho6umoB7oLmlofyiRDhyNxGxvsYt6T3ACpTscofA/E2A4eYVvT2k19IvGjpEfEdYus5s6uRDYJBdE7hm8JkcLj2JV6hbnaPQf4h/CSB8Z/8VbWNOrT8Rm1/Lr76LlUqdbTVfCqiJJGZuNx0Pygp22to5e5LSQ8OgOgWOUyDP4gwHyU6ltN9YtYIuASTuABmfPKqjZ+OBrvBykGlSdBg6hwm/mFJ2VTNOnOcAkTxIaBDRPT4riV2HjzytzFj9AvptM9hoAFt7weRmO43iNzgK8wtvSuA6OWbX/dKBjnw8uF3FoDBwgFxd0t0kdAY2zMa/uWyMxJLrCbOJi/Q6qQxrzmdGVzyOHhaN3MwqtPVaJmpA6kZ6ArlarTlrmxT4rzvgcyIif8AMIVOm+m3NUewDgT4jO8k/pF14yo1wlpB6GUjhMOxpDWZ3EyXPh7nHi4lw9yhPFMOzMLGuGrWhzCW6eidRzFkc+KQA9rjiRIc7qRiTc2J5L35KbC5zXtyTMcDegMzAxta8bIuNbLHD+E/Arhbx4Cu8VoLTzBXCq7bO6n4o6W6W7ZVMJJ0JI1i+nkx6emVFIcJwUfFNkTvBuvcP3v3XIGJLmvmCWkCfh+iPhq0HVUVG1eKm6kQCR6xt3hT0XUOGq2sLAz2mL9pKusRTqVKMx4gNBvjiDEhVFHaGJ1G6DBv6IiOkK5+mDunAnpcj3jeFAwrmAE5/gV06IPAQ5vllcjVOBqNNN8WucTFhb1XtHaYqEZmhrpg8RwB6ceivyzwRfT7oAPkNJWQxWIaHTkIMQCNDGk/Mo7dp1CAJIaBEHT2m/8AZc7UV9Ox8CQdxDvt/oXY0ej1j6fE+CDghzb+kjp3za4k0NoPZLQc3im4vqZEbp9ynVMTTqg52kZYykjcYH9+Fis7VqOJmb7+BPE81ZUKhIsZ+eBlNZqKGpP5DDvQ/wB+SRV0uq0f6glnMXHYzcbG9sXspm08Iyo0uaQHj74MzG53HqVj61PurEQHOuN2Zx9IdTEjnPGbWuCXEXBmbSLjkUDG4QuYQ8zvbFiDuuf6qXT1/E4qb7cM9RuM3jz9d1ZqNJwcNSnfjjoTg4MTvi/S4CraNMNJjedOB5IGOoZhP3ot7f7qHiK1Vjw1ws6zXgEtBv4XROU89DCl7afiKlMuw9LNUytyh/hZOdrjmDozAjOI5rpt1jaTWlxHqNlyH/htSq9waCBNrEWOc3tyUIbDqYul4yKYzHLVqHu2kyR4Dq+Qfug3CVRraGNpMdXZUqPpFrsocJkOeHw4f9OCNZ3WUOjtTGBuTGBwqtAaC3KzMwDSo83taMtzre82HZc0DXc6pTomqG+E+k8D70vd4ifELkAkcVyxVdTY7huDNs5/1d6s0aiozxLEAAbY6b/LorTGGWTaRceWvtCjYKicwMG0iZHv84V73zZsAOi9+kBY38UqMH6d+c+myRU/CGVCJqGBJAgWnPrCpGMqNc4NpvLbEcOMT5n3L2hs/EPf42wyINwDO4iB+iuvpfBNdjHblPV1td5/KA0XkDBnM/PvPNW0tFTpth35jAAJyAMAdpgZIEAGAAoGyezz6ReXVZzQPRghoLiBM39M7grWng2N1v1uoz8U7ihOxBUlQVKh4nFUsDWNDW4VkawGgUatiZUUVZTHPWNoLeIJVhO9QsRSzWcOhFiDxBFwVKlPTGtLDIWkhwgpmzKpNNzHkGowwebSPA8DnDgeBB3QuMYsWf6zviV1zHjK5lYasMO50nQHg8gId1YFyfHNg1RwqP8A5iupSqGpLnZ3XIr0RSgNxsqVJOhJNSV9NprwiIdTRSnCcEbC1GtPiiCQJPE2HxjzQ9r4UekI3THuI9yjY6lmYRzb7nA/kqzFl9/EbaGecj55clri9rA9rZg7bEQfQ4TdPTpVKhpueGkjfcGxi+R1jYqRTpPJgOPkpuG2PfM08J4X06KFs3HSQRZw1B0WkbWaG5wQRYW+Ct46gfDSenn0K5ZoU+CKgEjMRkWkEfwoWIwIa2S0TxNveq4ibWWiOMYRBuNN/DUHVUtfDQZbJbz1HWNRz57kmuKoqsrtbjOMKrSO05oP0r3j83w335TgXiL35ZmGMMXEx1Ovv/qnML2btL8xv8wjsJm0i3zZTspMR+i7LgwbCO3b7D0HJfNNqVnSC903m567HqTPc7kqDXlx3gjW9v6Jv0ZrhcCR5/FWVeg5l3aQTO6AJJ/oqPFONR0mzOG93N3Ll7eA4uoo06Vcapjs5GZtty26fX6LS1K1eg7SVW2GDiOQPP3PMMdhG6sI11At/wC3w5o7sVG4c4sPLX4qJXedAoVSqVy67nVncRAHl9fqu5p6TabA2SY5kn62HRP7SVW1KLgWOJgxAk8ojmuU7O2saVRrxq03BtyIMrprsSVV7TwdCv8Aa02uP4tHeThdP01bwhwuEhK1Gm8QgtMEK7wmJDoPEBWDQCsLUoYqhBoA1aYtlcQKjY4ONnD2HqpWE7ZMactZr6ZGucR79F7hDrt9+WURluffnhbZjAn92FWYHbFKoJY9p6EKc2oClmmt4iimm1MdTamkrxxWeH1XuNNcwbkJzU4uQ3ORBkLxehPBGiC6tCfVeo9V0pwhLum42qDTfOmR3sylcz2y363EAad7UjpnMLoLnFxFFty5wa7fDSRIPMjdwM8J5/tZxNXEEgj6x9jrqqabSBJ3Ueoe1x4QcH0sFQQknQvUxTL6ZTH6IhTHiymKeE0iyoMRVy1CCQBAN95dMeyPetA1VeP2eXvmLWyltzzOUjd1V34fU4S5vMfyNlzfxOj4jWmMEg72dv5EBSKnZ5zsr2OAkBw3xIvpqAfaPYbLBYapTGVzsw4W8Pt1HzCFsKoWDuzBbfK6SL72Fh0O/wBvBSamNcDBEG/mNx5oa9QvN/Lmj09JtNv5RHMSY99toVfiA5h4jdaEWjiQUas/ML6ajl+vBRm4doNt6N1ZzqfE03GfulCgxtXhcLHH2/pS6lAOE7+P6pMbaD77+9OonigYuoHOFMaxmf6u5vmfcDxCmo/iYJh0qmt+D7sgHziPf2XmMrGoAATkFwD948SeA3Dz4RU1s0q2e6ygYgKGq4vPEV2KLAxoaFDqqDUCm1EBwQAJwKrqtIoFKiZnRWJAlDcQthGCmUwOKVfCUqgh4B+KaWr0MWeGCveIVSYjsxSzEt8PBzSWH2tTaWGxdEzTrlzfw1BmHt9L3q/pUSjfRk1LJCgYbtE8WrUo/iYcw8wYI96tKG0GP9FwmJg2PsN1Eq4IFQMZgaZhziBF5JiPNZwrJCu31UJ9VZDZm2n1cUcOwuaIPdmpIzlslxgtLtNBbQ8YEfbm1MXSqNYXQHsJHhAcC0w6ZFvYjNJ0wUAe0iQZvHX099YWtxeMZTbme4NHE/AcTyUChiHYhj30zka0wQbPcI1kehrbf00WNok1HZnuLjBu4yRxidB0W87CsJbUYQ8DdaAJ18Ws8l0homsZxOMn+B76jyXId+IOfUDWCB13/rsfNTuzezgB3hGkhs8d7uR1HmVzftCP3jE+u78l2oUw0ADQWC4x2nH71iR/F/tCnZJcZJPU5TnkHAA6DA9lZiEk5JMhLX0wmv0SSUpTk1ie3UdR+aSSOj8Y7pdb4Hdj8kHbf2o//L/UambU+08h+a8SRvwO5+QQNyfe5QmaD5+6UTC7uv5BJJUj4X9vqFJ+5nf/AOSrBmqqsJ/iK/rM/wBNi8SXGpfpn/yPyX0J+P8A9R8wplRQcRqkkiOETVXv1QTqkks2RoaC5JJeK8vUamkktCwotNPKSS1qFAWV21/imeqfzSSV+h/U8j8lz/xH9HzHzVdj/wD5LDes34uXvbz/ABVL/wCt/wDMkkiHwH3sUNP9Vnc/NQdmekehXWOznov6t/kYkkqq/wCi3sPkFFT/AF39z8yrNy4v2q/xeJ9b/a1JJQ08qtyzSSSSYgX/2Q==" alt="">
                                <span><strong>Ir. Onno Widodo Purbo, M.Eng., Ph.D</strong></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. SASARAN</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                1. Mahasiswa Universitas Pelita Bangsa. <br>
                                2. Umum. <br>
                                3. Pelajar Tingkat SMA/K Sederajat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">4. SYARAT DAN KETENTUAN </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <span>1. Melakukan pendaftaran seminar dan mengisi link google form di button bawah</span>
                            <span>2. Melakukan pembayaran pada No. Rek …….</span>
                            <p>- Pelajar Rp. 25.000,- <br>
                                - Mahasiswa Rp. 35.000,- <br>
                                - Umum Rp.50.000,-
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">5. WAKTU PELAKSANAAN </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="table-custom-responsive">
                                <table
                                  class="table-custom table-custom-striped table-custom-primary"
                                >
                                  <thead>
                                    <tr>
                                      <th>No. </th>
                                      <th>Tanggal</th>
                                      <th>Pukul</th>
                                      <th>Kegiatan</th>
                                      <th>Lokasi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1. </td>
                                      <td> 17 Oktober
                                        2021
                                      </td>
                                      <td>
                                        09.00 -
                                        12.00 WIB
                                      </td>
                                      <td>
                                        Seminar
                                        Nasional
                                      </td>
                                      <td>
                                        Auditorium Universitas Pelita Bangsa
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="button button-primary button-round-1 wow fadeScale" href="{{route('form-film.index')}}" target="_blank" data-triangle=".button-overlay"><span>Daftar lomba</span><span class="button-overlay"></span></a></div>
          </div>
        </div>
      </section>
@endsection
