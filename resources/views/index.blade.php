<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="./sass/vender/bootstrap.css">
    <link rel="stylesheet" href="./sass/vender/bootstrap.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css">
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>

    <div class="post_page">
        <!--***** nav menu start ****** -->
        <div class="nav_menu">
            <div class="fix_top">
                <!-- nav for big->medium screen -->
                <div class="nav">
                    <div class="logo">
                        <a href="./home">
                            <img class="d-block d-lg-none small-logo" src="./images/bignetlogo.png" alt="logo">
                            <img class="d-none d-lg-block" src="./images/bignetlogo.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li>
                                <a class="active" href="home">
                                    <img src="./images/accueil.png">
                                    <span class="d-none d-lg-block ">Home</span>
                                </a>
                            </li>
                            <li id="search_icon">
                                <a href="#">
                                    <img src="./images/search.png">
                                    <span class="d-none d-lg-block search">Search </span>
                                </a>
                            </li>
                            <li>
                                <a href="./explore">
                                    <img src="./images/compass.png">
                                    <span class="d-none d-lg-block ">Explore</span>
                                </a>
                            </li>
                            <li>
                                <a href="./reels">
                                    <img src="./images/video.png">
                                    <span class="d-none d-lg-block ">Reels</span>
                                </a>
                            </li>
                            <li>
                                <a href="./messages">
                                    <img src="./images/send.png">
                                    <span class="d-none d-lg-block ">Messages</span>
                                </a>
                            </li>
                            <li class="notification_icon">
                                <a href="#">
                                    <img src="./images/love.png">
                                    <span class="d-none d-lg-block ">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal">
                                    <img src="./images/tab.png">
                                    <span class="d-none d-lg-block ">Create</span>
                                </a>

                            </li>
                            <li>
                                <a href="./profile">
                                    <img class="circle story" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEhUPEA8VFhUVFRcWFxUVFRUVFxcXFRUWFxgVFRUYHSggGB0lHhUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGi0mHyUtLS0uLi0tLS0tLS0tLS0vLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQQGAgMFBwj/xABBEAABAgMFBQYDBQYGAwEAAAABAAIDEfAEEiExYQUGQVFxByKBkcHRE6GxMkJSguEjNGJykrIUM1NjovFDs8IV/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAEEAgMFBgf/xAA6EQACAQIDBAcGBQUAAwEAAAAAAQIDEQQhMQUSQVFhcYGRsdHwEyIyocHhFDNCUmIGIzRy8VOSohX/2gAMAwEAAhEDEQA/ALyvnTPRgoAIAQAgBCQQAgBAJACAEAIBISCgApAKACEiQAgBAJQSJACkkSgCUgSEiUAKzQElZs0goAISCEAhIIAQAgBAJACAEAkJBACgApAKACEiQAgEgBQSJSBKCRFSBFCQUASAU+iEkorNmgFABAJACEggBACAEAIAQCQkEAKAYvBkZGRlmsoSjGScldJq65rl2kPQ5O7r3Oa6+9zntJa6brzZgnFq9F/UtOFLERjSpwjBxUo7sN2W7LhLjdetTVh86d756O+ea5dDudhebN4kAkAIAQkSASgkFIMUAFQSJAJCQn1QEsrNmgSgCQAgBCQQAgBACAEAIBISCAEBzt4ITnQH3Tl3iJkXmtxc2Y5gFdv+na8KW0Ke/wDqvFOybjKWUZJPK6ZpxCvB9GduaXA37NawQ2/DYGtInICSobQnWliZ+3m5STabbvob7JZR0JKpASAEAIBISIoAUEiUgSASgkSASEh5eaEksrNlcFABAJCQQAgBARXbRgh/wjFbf/DPHKeI4YK8tl4x4f8AEqlL2f7rZcu6/EwVSLluXzJSomYIBISCEXGGk5A+S2Ro1JK8Yt9jNM8TRg2pTSa6UMwyOC2LB13+hmv8fhv/ACLvNVos3xGuY5pLXAgynkRI4hbKCxOFqxrRg96LTV4tq606B+Lw1RbvtI5/yXmDGBoDQJAYBVakpSk5T1Zc3t7MyKwAkAIBISRNpWswWXw28bzWgEyE3EDEyMlf2Zgo4ys4SluxUZSbSu7RV8ldX7zCcnFKyzbS7zOyxHuH7SHcI/iDgdQR6gLTi6VCnO1Crvq2u6426Gn9G10mUG2rtWZuKqmQkAFCTFACEiqvdCQrJASys2VwUAEAkAIAQAhJztq2N8Qw3Q7s2PvXXTAdgRi4YjAnhxXY2XjqFGFWliN604qKlGzcUpXeUmlZtK+a0Nc1LeUo8PKxls3aBil7XMDXQ3XTddfbPDIyHPJYbT2ZHBqnOE96NSO8rx3ZJdKu+x3zJpz303ydicuSZmRaAJuMvr+i7mz9h1sT70/dj8/t49BxcZtmFL3aK3nz4eb7MukiRtphuEMeP68fkvUYfZ+FwytTjd83606NDkTjicU97ESy5ZeGifTmys7Y3tZDJDohcRmAQB0nxqfBWHJcjdSw9OmvdRWbVv7DH2WN+Z9qzWO8byCe0WI37DB8x9CovchpPJkmx9rFoaZPhBw6k/3Gfz8+GupSp1FaUUzV7CCd45Poy8Cx7O7ULBEkIzHQj+IAub4tGIHSa5OI2LQnnBbr6PLTwLNPFYql8Mt5cpa/+3ncuVmjw4rBFhRGxGHJ7CHA+S83icHUoP3s1z9aHYw2MjWWacXyf0fH1kZqoWyNbrW2CwxHHAZDiScgBxJVzAYGpjcRGhTWur4JcZN8El5asxqTUI3ZztnbKa6Gx0a+5+DjeiRCL2c7t6S7O0tu1VXq08LuKm96KtCC93S192+a6TCFCMd1u91Z6vXw1OwvNG8xQAoJEgEgEhIkJHWaAllZsrgoAkAIAQkEAIBI1cHN/wDx2sn8GLEhmc5Bxc2erXT9F3ZbdnXa/GUadXK13HdnbhacbWt1M0qju/A2vmu5nSMQQ23nGZlh7yW7YuzVVft6nwrT1z5clnxRxtrY2Upfh6XHXyvyX6nx+HmcLae0RK890hiQJ8uOP1OAXq5Ty3VkuRSo0FTz1fPy5I843k34JnCsx0MTh0YDw1K1Nm8o0aO95m5xJ1WJJrQAgBACAsG6O80ewRQ+GZsJ78InuvH/AMu5O85jBaK1CFVWkizSldW9fZ8nwPebFbIVphMtMB04bxMcwciCOBBBBHAgheU2ps90Je0j8L+T8n8nlyLmDryUvYVHd/pb/Ulz/lHjz15hFgMfIuaDdMxPgcphc+liKtKMo05NKStK3Fcn0HRsrp8jNaSQKgkSkCQkSASgkEJEgFPohJNKzZWEoAIAUkgoAIBIAQGTRzyGJ6K5gcI8TWUFpx6vv9ylj8WsNRcuLyXX9tflxK9t/awY10V32W5DL65L36UYRUI6L1f11HAoUnBXl8T18vWruzx3eLeKLaXHvd3lwlww5UZ8MLlg4Rc05tlqMv6T6EIDGQ5+f6IAlr9UAYIAmgBQABQmLs7no/ZNvIIUU2SK79nGPdnk2LlL8wkOobzWirTjUi4S0ZelT9tD3XaSzT5SWj+j6D1eKy6ZeXReExFCVCrKnLh4cGdDC1/b0lO1no1yaya7GYLSWBISJCRIAQkSAFAEarkhIeakEsrJlcEJEgGgESgBQAUgEBH2nGuQ5TlemT0GZXs9jYb2VLe4+r+XaeXxNT2+Kb4RX3Xn1o8e3826Yp+EwyY0+Z5n21XVbuZFIaViZA4SQCQAgBACAaAQQGyyRS12BI4gjAjkQeBWMkWsNOzsfRW621f8dY4cc/bAuv8A524O6TzA5OC81t6j8FZdT+n17yzQl7LEuPCav2qyfet195NXnjqiQkSAFF0SIlSBISCASAKzQklkrNlcFAEgBAabVZYcUXYjGuGcnCcjlMcjiVYwuMr4Wp7ShNxlzTt2Pmuh3RjKEZq0lc5kSwR4LD8CO5waZiG4NMxPFt4ieWS7sNo7Px1dfjKCg5KzqRlJWlbKW4nu2v8AFrzNTjUgrxd7cHy5X16je7a4aA6JBisGALi0XQTzIMwNVWjsKpVm4UK1Kcs2oxn7ztnknFJu3C5k6yWqaXNrxOix08RlmuXhYXqpPgY4uThTa46Fd38tvwoLyD90NHU5/IH1wXvKEdyjFdF/XYeYw2e9Lm2eG7QjXiKnqsiwiIhkZgTHT6Gp+akGCgAgBSAkgBQAQGAdIqGZQdpHsXYzbTK0WcnCTIjRri1x+TFzNqU1PCVFyV+7M6NaP5dRcGu5+6/G/YX2K2RIXiou6OpF3RBj2p7SQID3SyIMORPi6Y8l08NgqFXdc8RCK4p7+8lx/Rut25SMJVJK9ot93mR4NmtADXfH7/3muaCzoJSI81dr43Zk6kqbw1qekZQbjOy4vevGV+N0rcyFTqRtaV3xvp2aNGdh2c2HJxcS/G84FwDiTMktnJadpbZqYy9NRSp5bsbK8EsklK19NeDMqVJQ0149L5k1cY3AgFNACEhOpKQSysmVwUEggBAJACAxiMa4FrgCCJEETBB4EcRos6dSdOSnBtNaNOzXU1oQ0mrMyhiWACuYHOcmyjtCT3UUvtJF5t05F4B/pqpL22Ik4Uk1wS8EczYNGFarTpzWTcr/AD8jzjaW7EUNEVrHtY4C657XXHDhdfLHjzVKGLkvjXaeiq7Cozbjhqq3lrFu9u7NdqOFHskRhk5h0IxB6EK3CrCfws4uJwOIwz/uxa6dV3mLnSk0cMSeBPLUDEazOi2FQwdhlkcRXmPBAKdSCACUAggGgEoBpJxUEo9L7InkWvR8B46ydDPoqGP97DVV/GXgdumnuRbWT06fX/eB61asx0XhIaFmnoR5rYbQUASEiQAgEhIlIGgJZWTNAKAFVogFVaoAQAgEhJk1dDAay7Dn7QWUe0pvaKO60/7jT/xPtWC9jiHvYZP+MfoUv6eVsXCPKUl8n5noO7jQLDZm8DAhTHVgJ+q0xjenE015P/8AQrf7S+TOFtzcqx2kEhnwnn70MANP80P7Jz4SOqwlQWqyZ2MPtevSW5P348pZ/PzujyXe7s+tFknEY0Oh/ib9nHmM2HrhjgVNLEtZT7/MyrYKhivewmUuMHx/1f08CmNaTNkscSBxmMxLoPkFdWZwmmnZ6mtACAZElIEgJuztkRrS4MhMJLjLAEz/AJQMStNStGOWr5Iv4XZ1bELf+GH7nkvv2Hp27HZQxsolsdM5/DbInxOIHQT6hapKpJZ5dC8zoQhhcP8Alrfl+6WnZHzJe79iZD2xFhw2yZChRJDEyF6G0CZxOaoy93C1n/GXgXcZVlUjScnna/r7eReLXw8V4ymaKXEjrYbhIBKCQQCUgEJBAJATCsmVwqtEAVWqAVVohI1AEgBANtVzV3Av32ugpY9f20+krm/dlv2cuH3Re/oMz/xJ8l7DDv2uEtxV19V4nIwVVUMYpPS8Zdmj8PmXLdxwdYbMR/oQx5MAP0WdLOEeoYpOO0ayf7peNyQtzpmTNJAOBEwcCDx0KpOmWbtZo8r7SNwg1rrZY2yljEhgZD8TTnd4y4dB3ZhJ0+rw+xbkljVZ/m8H+/of8uT46PmeURCc/TIjMK6cdpp2ZhNAMCeA6Dr+qhuxKTk7JXbL3uV2fvtUo0Y3Yc8yJzlmGj7x4TyGq0x363wZR58+o7ccLRwWddb1T9nCP+3N9H/T2HZWybPZWXIEMN4F2bnfzO49MtFvjShTVoo11MXVryvUfUuC6kTgcVjNe6zByyKNucfi27aFoH2b4Y085viE/IM81yMbLcwNWXNW73Y6Fd+9GP7YxXyu/mWm1nHwXjYaGVJZGhZm0SAEAihIkAIAQkSAmmqqayKwkJCq01QBVeyAEAlBIIAFV6rbRnuTUjVWp79NxMLbBD2OaRPDLnzHlNev2ZUtN03+rTrXmrnl8Qt21Tlk+p+TsYdm9qnAiWFx79leQJzxhuN5jsep6YK0vdbhyfyZexUXOpDE/uVn/tGyferPtLA5ivwkpIwZqcFrnTzLMFdCIWiVMy3TwftT3ZFjtAiwmygx5kcmvGbfUaHQqKS3fd7jHG/3GqvF5S6Xz7Vr0q/EpAW4ol/7L90hanG1Rh+yYZD+M8Wg8uZ8BnhrdJ1ZWfwrXp6C9h8VDBw9oleo/h/iuMut6L0n7OGhoDWgAASAAkABkABkFa0yRoU3Jtt3bEXLCpoboPM5G9e3G2KzPik98gthjm8iQPhn4KrVk92y1Zbw8FOV5fCs35dryOT2Y2QssQiHONEfEM8MAQwYcu5P8y4u3qip4WNNfqfyX3sWHJzk5S1Z347puNZLy0VkWYK0TWsjMSAEJEgBAJCQQCQE2qrBZMrhVe6AVV7ISFV7oAqqxQBVVggCq90Aqr2UA2MK7eCrvdUlrH0jh46glJx4S9Mrm1IjrBa2W+E2YIuRG/jhnMdRLA8JNnyXp61qkVVh65op7PxK3Xh67yvZv9sl8Muq2T6L8kXiwW6FaGCNBfeY7I8QeLXDgRxCmnUTSkjOpCdCq6VVWfrNdDHHEsVdWZZoSzsyM56xcC3Y8z7Z9tQRBZYZB0VzmxD/ALbWzkerpkS5T0VeSW9Y04l7tO3P6cTyE5VqpOcenbndpMCDBh2WPZ/hiG0ND4WLTq5rjME5kzMySiqOC0v1GUcPGrK+/Z/y071p2rLmXuy73WCI2bbU3xvD0x8EeJpcXbrL8NmYqy3Y36U018mcra3aDYYAN15iO4AAtHiTj5ArXOupK0E34d5YWBdLPETjBcr3l2JXPL9r7wWjacYOIOd2HDGU3GQAHUj14LWotO8tTYq8JrdpK0Fnnq3zf0Wi7T3ewWRtngw4LcoUNrOt1oE/GXzXk9vVvaYpU1pBW7Xm/obILgRiVyy5YSEiQAgEhIIBIAQkEBNNVU1mVhKCQqtdUAVXsgBAFVWKASEhVe6gDBqvorGGq+znno9SviaXtIWWq0NW0LII0N0M8Rh15VovXbOq3vSfWvr5955TFx3JKrw0l1cH2M8zbti0bLiufCcbs5PaQS08rzePUYjFWJU5J70Nfkzq4PGUqkFhsYrwXwyXxQ6ua6Pk8krfY+0+zxGzfBfPj8Mte0+ZBHRIYzcVpxaOvHYcpreoVYyXPTwucPeDtPa1pbZ4cnHIuIcR+UYDxJ6FbfxVSplCNul/RGVWnh8Kr1pqUv2x+r4L58jyi22uJHiOixXFz3GZJxWUY2Vjg1q0qs9+X2S5LoNM1kagkgEhFgkoZMVdl87LNjfGtTYhHcgftXYYXsRDGhvd78h0WipVjSjKpLSKudilC0Uj2O1vwlzXz1zlVqOpLVtt9pdpLMhrIsCmgBAJCQQCQkJqQJACAmmq+iyZXCq1UAKrRAKq1QAhIVXogCq1UAVVogCq1QGbCuzgsQ7Kz96PpHFx2HSk7rKXplS342TeHxmtwI73vX/Xq1NVYKrHjr0Pl64HAinTfs3rH5rg/ozx3a2z3QXkSN3NpkZXXYiZ54yWRei1JXIKkyGEJCaAc5oDFQCTY4JcRIEmYAAEyScgAMzksZMt4annvM+gtz9hCw2ZsI/5ju/FP8ZA7o0aAB4E8V5z+oMVuxjho6v3pfRd+fYuZ04LiTI8S8dOC83FWRchGyNSyMwQkSAEAlJIkAIAQkSgE416/qs2VhVWigBVaoAqtEJBAFV6oBVWigBVaoAqtEJAFbKNR05qSNVakqkHFmUSGHgtdkV6vZ2JUZqOsZWXkzy+MotLe/VG/auK7eB5Nvxu+WPN3MElrhPxE6zC6zTi7FelU0a0Z589vMSIzCyLYihISQB4oBtE1BMVd2PUeyXdwOJt0Vvdhm7CByL5d5+t2YA1J4tWiviIYenKtPRfN8jrUoWSR6Xa4ssOJ+i+f1Ks69WVWerd/XVwL9KHEhobwQkSASAFJIkAISJACAFIJxqqmjKwqr2QkVVpqgCq10QAgCqrFQAQkVVpqgCq10QAgM2FdTZ9RpPodzlbQgt5Pmjgb1Ng974xk0lsjxvOAkBqSfnqvbzSbZ53CR3sPFPhfxZ5Tt/ZAkY8B7Yjci5mI0Dm5tdlgVq0LEG45SKySpNwlABAbYJkVEjfQXvXPovdSy/BsNmhykRBa5w5OeL7vm4rzX9STajSp9b8PNnXp5q5se6ZmvOpWRfSsrGKkkSAEJEgBAJSSJACgCUkggJxqqkpZVCq9+KEiqh6IAqj6qCQqvbigCqrBAKq9+KAKoeiAKo+qAKqsVBJkxdHZ6blJLoObtGyjFvpKd2oA/4Z/Vk9JA/p56he5cZRilLWyv12zPOYSScG46XlbvPHoNoiQ5xWPkSSHHAzvYyc04OBkc5jBYFpo12iKHm9dAJzlkdQDkgSsakJE50kBjDeZk6FYs205Wdz6jIlDGjAPkF5b+o4P29OXBq3c/ujuUeBBXDLokAISJAJSSCAEAlABSSJACAnGqqallYVV7KAFUeeqEhVaaIAqqwQCqqxQBVeyAKrXVQBVXshIIDbDk0X3eGtc167YeCdGH4mfxS+Fcl+59fD75eU21i/xFT8LS4fE/p593BnnfantECH8MnGJIgaNwJ+UvE88O3fI04eChBRXA8usT23rjzJjxccZTuzyf4ODT0BWJvNMWG5jnQ3iTmktI5EGRQGDmzQGoiSgDhoZQ1PoTdDeyHtGAW4Njsb34fOWF+HzafMEyPAmjj8CsbBRvZp3T1O1h6ibVzpTXl8XszE4bOcbrms15rtOkC55IkAkJBACASAEJEpAIAQE416fopZWFVaqCRVWiAdVqgFVac0AVXogCq1UEiqtE6AbBCMpuIaObjKiunQ2Tiauq3V0692vfY5WI2xhqT3Yvflyjn89DVEtkJmQvkcT3Wjnmu5hdh0aedT3n06d3nc5VbHY3EZJ+zj0Zy7+HZYq+197bJDJ+Lam3spNvPlpJgN2s127pGmlRjTjux/71nmG2o7LVFMV9uhYykBDtEmjHuj9nkPUrE3HJfZIeQtULGWN2PxnP8A8fCXzUAlbYdCc2E4RmRIob8OJcEUAtYAIb5xGNxu90jH7DTPEykHLUA0vKgGKAmWDaESC9sSG9zXNM2uaS1w6EKLG+nWtqXnYvaRHBAtIbFHF0gx/XDuny8VnGo1kzqUMatGX/ZG8FmtQ/ZRBe/A7B3lx8Jrn4nZOFxOcVuy5r6rR+PSdGM1LQ6i83i9j4nD523o819VqvDpMxLlkggEhIIBIAQkSkAoBOr3/VSysFVogCtf+0AqrRCQqvRQBgTyquKzhCVSW7BXfQYVKkKcd6bsukxjvZDxiOA0GfsPFd3DbAqSzrS3VyWb79F8+o41TbKllh4X6XlHzZXdq78WSzzHxGz5N775/QLv4fBYfD/lxs+fHv18F0HNq+1r/nzbXJZR7uPaUnafaPFiGUCGATk6Ib5OgGQPLP2tXtoZRhGKtFWKptbbNrjf50Z50nJs+QAww+s1Bkcq7NQDEsCAxMM5iqkgBj+BQGckBrkOagGTQFIMroQCuoE7G6BaXsMwfIrFosUsRKDLru/2gRoUmRv2jNftDo7j4zWUakonVo46MspHouyNt2e1CcGICeLTg4dW+yp4nZmFxedt2XNZPtWj9Zl+M09GdFeYxuya+F95+9HmvquHh0mxMxXLJBACEiQAgEpBPNVU0ZWQqr24KCQqtNUBkxhOVfrorWEwdXFT3Ka63wXWyricXTw8bz1eiWr6jZEYxgLnuAA4uMhlivQ0ti4Wmv7snJ9GS79Tn+3x1d/20o//AE/IqXaJvTEsENgswbN+F48JcgM65rq4WjSoxtSil49rOficM3NSrScn06diPH9obdtVoM40d7tAZNHRowVi5BAczCYMx5EdR7TUEmUE3e/xBk3+bOfhMHqRqgNd85zMzmZ59eaA2tExgO8e7IDxJAHkeqN2JjFydkszVLVSYhohJjFbooBqBJwUAzEMKbAzAQDkgEpA56oAmoCdjZBtL4ZD2OIIyIMiOhWLimb6deUdGej7nb5R4jCyMBEuyk4m67xPHy8VjLEypOzzR39nTeIg3LVMuFh23BiuDMWuOQdLGXAELk4jZuGxTvS9yXyfZw7O4vyozir6o6K8tWpTo1HTnqjWJayQQAgBCScaqpIyr69esxVXvxQkyhsvGVVot+Gw8q9RU4/8RWxmKhhqLqT4fN8vuadsbRbZYd6U3EyaNc5k9AT5L11ClHC0fZx7ellXB4WWJq+0qfFbuXJfXmUbaG0Y0YkvcenLjlworGUm9T0dKjTpq0fXr7FR39tt/wCDCvTLWvc4ci57pT8DU8LuG+A8zthWxFuhFRW85Zss/wBocjgf5fvfKfkgMnlrsnEACQm3CWpaSZmZOWZQGt7CMD7g6gjNATNkxA2K2eo8TUlqrq8GX9lzUcVG/G6716Rpt7LsRw1PzKzg7xRXxUd2tNPm/E32LZ7omM5DnWawqVlA34TAVMRmslz8jo/4KBDHexOvsFo9pUn8J1Xg8Hhl/cd30+SNNnNnmQQ3yWUlU4FejLBNtTt3GUbZkNwmwy+YURryi7TRnV2bRqR3qD+q+3rI5VpszoZk4KzGSksjjVqE6UrTRMsoDbO9x+9MegWqd3VSXA6FBRhgqk3xyOYt5ygQAgG1SC0bmskHnUfT9VSxWqR6TYcf7cn0/T161scQHMGRGIIwIIyIPAj5Kqd+DLtsLaQtcKZkI0OQeBhe5PA1kfEHRcXbMfejW55PrWj7V4HOrUnQnb9L06OglLjgFJIIBICcaqpoyqgqvZQSS7G2QLqrLFeq2LR3aTqevWh5Ta8niMZTw60vd9S9Mou9lv8Aixbgyhkjxwn5SVyrK7PaYGluU7vicNai6U7euGBGn+JoOnJX8K/dZ5fbUbVovo9evI4jwrJxxnAS4nPpmB44HyUAwUg3Q4L3NLg0lrTmOE8/T5LFySdmbYUKk4OcVdLU1NdLEcMVJqTad0WJtjZHuRcRhi04TOnMKk6jppwR6VYSGLlHES4rNdPl4mq37QDe5D4YYcNAs6VG/vSNGN2ioL2NHhldeC8zjPeXGZM1aStocOUnJ3bzNMLMoYkuz2pzDgVEoqSszdSrzpO8WdeG5kdl05/TUKnJOlK6O9SqU8bR3Ja+s166CBtPuNbBbwxOGZW+l7zczm4+1KMaC4Z9bZzpLcc0SAc1JAwhJbt0IUoZfzJ+WC5+JfvnqtjQth782/Xy9WO+Sq51jo7oR7lra3/Ua9nkL4n/AES8VWxlH21CceNrrrWf0t2mGLjvUL8mn9PqXO2MkZ8/qvJ03dFCk7ojrYbQUgEBONen6KGVl69eICq581MY7zUVxMZyUYuT4E6HgwePyXuMJFRw8UunyPKYSLqY6rUlwSXfn66zyq0OJc5xzJJPjj6rQz6FFJJJGtQSVbfKH3obtCPoVdwryaPO7dj70Jda8PXYV1xyVs4ICGTyJP8AE2Z6Ccz0UAwQE/ZVt+ESHfZdIHTPFaa1PfWWp0tm4xYeT3vhdk+jXMkW/ZeIfCE2u4DhPiNFhSr5WlqWMdsx7ynQV4vguF+XQ/l1HTjRmww1hOYlP1VeEHO7R16+Jp4dRpzeuX3OFbrK6G48W8HcCFfhUU0eXxOFnQlZ6cHzNLITnAkCchM9FLklqaYU5zTcVe2bNdnhOcZNE8CfBG0tRTpyqO0VfiZNBOAxnwUvIxinJpLU6MOVnGOLzw5DqtDvV00OrBxwS97Ob4cl69c5FtgiMwObnLBa6ctyTiy1i6KxNKNSmsyI+zsgsN8B0Rwyzl0WxTc5ZaIqSoU8NRe+k5yWnLp7OfccxWDlAoBk0KR1HoOyrP8AChMZxAx6rlTlvSbPc4Wl7KjGHJEtYG83bLiXLTAd/usHg5wafkSs6btJE1FvUZrofmeiW9uHQrxdWl7GvOnybXzyOTReZCQsAgBATjXr+qMrevX0GzOqlyW/C/mx9cCvi7+xlb1mTIR7vQn3Xr8HK9K3J+J57DNRxUl+6Kf/AKu3g0ea7ZgfCjPYMhKXS6FjNWZ7jDz36akQ8+vllj4c1ibtDg73wZwQ/wDC8fPD1HmrGGfvnI21G9BPk/t6+xTiVePLiQGTjPE+Ouv0UgU68/dQTfK3rj5nW2DGdMsn3ZTly6KtiYq1+J2tjVqm+6d/d5eRJttmEd0mPF4YXT1WFOcqazWTLGLw9PGTbhP3llbqff2mhj4sObIkMvZpj5LN7k3vRdmVqbxGHj7KtTcodGfd97EiFCYGPdDmA4ESPA+K1ylLeSlwLVKjRVKc6N0pK2fA0bPsvwzOcycFnVnvIrYLD+yqXvrkIn4c2wYRLvxEfRTZzzm8uRi3HD+5h4Ny/c14erdZqh7Ne7vRDLiZ4lZutFZRNENnVqj3qrtxbevrrOhYywAtYZyzVervXvI6+C9iouFJ3S1OHb2kRHAmeOat07OKseexalGtJSd3zI62FcZQE/YtnvxmCWAMz4LTWnuwZe2dQ9rXXJZsv4wXOPZBPogHZYZfGhNaO8YjJeDh5SAWUFeSsZNqNOTeln4HpdtxB6rxuKrKtip1Fo27dXA41HJo55WJaIrgc+pCvpxd11X9eu82I3z6fNU9xdPyMTon2WDKiAe/0W3D/mx6zRifyZdRNs2R/L/cvXYD4Zdn1PNL/Mp9U/BHn29X7y7oz6lZVPiPcYL8ldvgclnoPqVgWZaeug5O837u7o3+8rdh/wAxHO2v/iy619CiHNdA8iZIQPgevopJEoB19383dFWxOiOzsX8yfUaXfvA/n9Vtj+V2FOt/mP8A2fizutXOPW/cwjZeX1WUNTRifgfrkRYWY8PVbnoc+n8SJi0HUlx7SBtb7Faq1h9TjbX+FdbNGxPvKcTqjDZHwzIu2f8AM/KFnh/gKu1f8l9S+pCK3nOGcvP0UAsG6H+Y7w+qrYrRHb2J8c+r6lpg/aP5P7XKkeler9cTY3IeH9qgPV+uJO3X/fIH5v8A0vWUNe/wZGK/x5+v1Ivtr+z5LwlPU5VL4iArBZMHZVzW6Px9n0MjYq5if//Z">
                                    <span class="d-none d-lg-block ">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="more">
                        <div class="btn-group dropup">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="./images/menu.png">
                                <span class="d-none d-lg-block ">More</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">
                                        <span>Settings</span>
                                        <img src="./images/reglage.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Your activity</span>
                                        <img src="./images/history.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Saved</span>
                                        <img src="./images/save-instagram.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Switch apperance</span>
                                        <img src="./images/moon.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Report a problem</span>
                                        <img src="./images/problem.png">
                                    </a></li>
                                <li><a class="dropdown-item bold_border" href="#">
                                        <span>Switch accounts</span>
                                    </a></li>
                                <li><a class="dropdown-item" href="./login">
                                        <span>Log out</span>
                                    </a></li>
                            </ul>
                        </div>
                        <!--  -->

                    </div>
                </div>
                <!-- nav for small screen  -->
                <div class="nav_sm">
                    <div class="content">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="logo" src="./images/bignetlogo.png">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">
                                        <span>Following</span>
                                        <img src="./images/add-friend.png">
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Favorites</span>
                                        <img src="./images/star.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="left">
                            <div class="search_bar">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <div>
                                            <img src="./images/search.png" alt="search">
                                        </div>
                                        <input type="search" id="form1" class="form-control" placeholder="Search" />
                                    </div>
                                </div>
                            </div>
                            <div class="notifications notification_icon">
                                <a href="./notification">
                                    <img src="./images/love.png">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- nav for ex-small screen  -->
                <div class="nav_xm">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="logo" src="./images/logo_menu.png">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <span>Following</span>
                                    <img src="./images/add-friend.png">
                                </a></li>
                            <li><a class="dropdown-item" href="#">
                                    <span>Favorites</span>
                                    <img src="./images/star.png">
                                </a></li>
                        </ul>
                    </div>
                    <div class="left">

                        <img src="./images/send.png">
                        <a href="./notification">
                            <img class="notification_icon" src="./images/love.png">
                        </a>

                    </div>
                </div>
            </div>
            <!-- menu in the botton for smal screen  -->
            <div class="nav_bottom">
                <a href="./home"><img src="./images/accueil.png"></a>
                <a href="./explore"><img src="./images/compass.png"></a>
                <a href="./reels"><img src="./images/video.png"></a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal"><img src="./images/tab.png"></a>
                <a href="profile"><img class="circle story" src="./images/profile_img.jpg"></a>
            </div>
        </div>
        <!-- search  -->
        <div id="search" class="search_section">
            <h2>Search</h2>
            <form method="post">
                <input type="text" placeholder="Search">
            </form>
            <div class="find">
                <div class="desc">
                    <h4>Recent</h4>
                    <p><a href="#">Clear all</a></p>
                </div>
                <div class="account">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="./images/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Zineb_essoussi</p>
                                <p class="second_name">Zim Ess</p>
                            </div>
                        </div>
                        <div class="clear">
                            <a href="#">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search  -->
        <!-- notification -->
        <div id="notification" class="notification_section">
            <h2>Notifications</h2>
            <div class="notifications">
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKiX56ktyofHvPFkShBy9Rgg73COL5oJNJsQ&s" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHRRW1HHrfrIoqzFcFrUsxQ3WQYugYDCFpEA&s" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif story_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEhUQEhIVFRUQEBAPEA8VFRAPDxAQFRUWFhUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGC0lHR8rLS0tLS0tLS0tLS0tLS0rLS0tLS0tKy0tLS0rLS0tKy0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xAA9EAABAwIDBQUGBAUEAwEAAAABAAIDBBEFEiEGMUFRYRNxgZGxIjJSocHRFEJy8BUjU5LhB2KC8TNDohb/xAAYAQADAQEAAAAAAAAAAAAAAAAAAQMCBP/EACQRAQEAAgMBAAICAgMAAAAAAAABAhESITEDE1EiQTJhFEJx/9oADAMBAAIRAxEAPwDGYA/Ugq0qo7+CZw7Dy1176XVmIN/ipepX1mK0kNJCgxTvOivMRhAuO9V8NHxslOlIVE61rnwU2Nx3oQYeTv09VaMhYBZLkzUSnJVrSyyEZS51t1rpMMDQNEZdbgsXItNBR04Dbk3Nt2qr6uYg2B1uQmIaiQjUgADVx4BQJsXjYfZBeb+8dAT0CJ34tjjuJjonHUknu3JVPK4c9FXnaZ/BrRy0uhDtDINSGm5+EALf4rRZGgNa/LYEgdyew8guBJ1VJBtE0j2ox4G1zp/lTYayKQ+w7KTqA7QE31AKzl87oSOoYPXtDQL7wrplQCuURVr47akWPMFaDCMWcXC5uNyzjlZ1D99bsvUGSoOayep3hwSJoOK1lla1jqUzUG4KqyVYVMoAVbmun87vY+s8WlE7RTMyZw6D2QTxUzsgrSpGMyGZPdmk5FrkNG7oWTwYlZUtjSPlQunzGk9mjZo5RBl1JDEYYjkNQz2KBjCfLUzKLBZtakMSAJhwUGprbOsp1O7MLomYuPZNkSf7NBa5Di4W2oAF+dk++azb81nKaQmwvo1Tpa0G3RTc1iQylzm7uaKRrWqOa64sCkgk8SsU9082UnoFJp3tCYjtZHHECl4E01Q3BPx2UT8LYXUXEKnIMvHee7gizbWE3TWMYlc5G6NG/r1VI+b98kJna/vgo11bGai9So5fn6I3S8VGJSg64Woykh507/onRUuFjdMRjd3JZbp3X+qNhfYVjzo/Yd7Tb2seXQ8NAtdh87SM7DcHjxHfb1XNnC1j1at1sNQ9rCbGxzOynqAB91LPCVvGtts3ipc8tzbhe2+61Uk123XH6SudHIeBBILd1iDqFqsO2j0yudY8Ln6rk3cW5ZU3G6pzTa+8oUlReyz+PYsJHCxvbeQl4VWX4qnzyY+nrpWHyAsbrwCkdoN1wsP/ABrsha9lPpsRzWN1fHLXSdatBQ8PmDm77qYqY5coLNAiJUTEajI0kcAqCpxGVw0Nh03pcrvUHU9akSBJfMAsVT1bx+Y+asaeYuFyUXkUsaSOQO3JxUuFP9ojuVzdGGWzsApuYaJwlMzv0SzvR4+spiI9oq7wlvsDuVJiXvFXOEXyDuWMfI3fasMqCLVBaDzPTR6G+5DIDom2uO4eSIgjekhYdbCLqWx1hr5qBG03U9pvos2kUTolUjtd6TO8MH1SI5Ra6JCsTvxZvZUdbOXOceZ+W4Kwjde56FU9Q7f3hE9W+U62iyPTIeg8+iZa5Wh09I/5lLjdu8VG3kJ1m8JsrSHd4o3Os3wPoUzTuv5o5j7Hg77LLR4m4H/H0C6PsOwsib118zf6rndIM1hxu1o8l0jCK1kDGtOuQAGwva28lZt7bk6qs2tGSskHB2R9urmAn53UOBy19RPBUkTdmx2ZjbOc0EkDQb0GsiG6KMf8GfZTuG2ONZCd6lYVVWWmLIjvii/sZ9kOxg/ox+DQ30RMdC41R19SXKwo66zbcgpb6OndvjHg54+qbfh0NtM47nA+oTuI1UnB9oywlp3b1oKXaUErFTYSN8bzm4NNtegI4qtbI4G91PhlGuUnVjZ7R7QA5QDvKeoa1jha6wszy7ebp+lqXMI1VMNxPKy1r6twGqbjxAADVZ2qxIkWuoYqzzVeTFjoWC1wzm53rSiYW3rkH8SLRcHXmpke1crW2OvVQtyl6WnGzt0aqxNrN5VLiG0TW6XHmuc1+NTSE3KqpauR28lOY5ZTsc5PHQJsVa87963OExARt6gLg0NY8Ea7l1PANpRlAdyASyvDW/BP57bPKgqj/wDQRfEEE/z/ADH4s3CqXD7C5SamjIF7eHRa1mDOJtwRV+CHKeuirYlbGK7O25AMIFwr12zsh3eiiGge05XNP6uCnZS1pF7HOzXkq7siw24cFfS05jG+4VWYM58/NOZ/0LsIGXB/SfRUlVoT4fRX1IwtzMPwuHyKoqnU/vkieq4f4oMu7w9VHCl1LfoofH5qkGXpxh1TjTqEzGUtq0yn0518kJnezb9+8k05S5Wev3SNd7L0hkkbYbg6Ty3K8kjqy4gWazNldaxeG268/FMbHDIA/m0Bb72XxZtPZGql1bVu5Io56gRtjO4OYB3OboR6HxSW4gOacxCk/EROjYbPuHxX0BeOF+oJHksbO6aHSWN7P1tcweZCxnuKYyVsm1oTgqgsbBiRKnR1yxzrX42nbUoxOqOCsB4qxiN05kzw0nRzajvVRWM/mPt8breZVlhtK+SUNG4e048gFffwYclX57rn++uow5idySmMdyW0fhITT8LVajpj5YXHgVGEL+RW4jw7XcpzMLZyCQ0552D+RSW07+RXRnYa3kjZhreQQNOd/g3cih/DnfCfJdG/hzeSL8E1A050cNd8JTsMUrfylb2Skaj/AALUWS+nNxhj2h4OQW3/AADeSCXDH9Ncsv2ehiA4I5YgeCcYlELbBhtK3kmpcNabmynBG7ckGAxnBHOJy6DeO9ZOGGSJxDxpffwXYpYgGklVU2FMew6Dj81i4HvpgcgcbrIVDcshbycR810oYVkJFtFhccpck55Ek/NYk1W/n5pSVZ1I/fAKIePTRTKn3z3f5UKTd3lVx8ay9HFu8LJyP3UI26fNKgbp4pspMH0upUg3fvn91FZp++9SwdfH0ugNZgItG3u+q1eHuL2PjB95haOQPNZrCmWY3uBV/SZg0llr9dLDiubf8nXr+MTsI2fmlAfJKGBriMrQXPIFtQ64A8irjGcViibl0ebWy72+PNUFVizommJrj7Xtkki5vpbQDTRUr5S46qlymPUT4XK7yUuI4b28pkbaMOPuxtaxvkBZPU+AN/M958begVu1oCJz7KK8MQYZFHqLk9XOd6lWNPckADUmwHVQwbrY7PYMYwJXj2j7rfhHM9UYy5Vn6ZTGbqxwihELNfedq8+gHQKRLKAiqJcqiSguK6p1NOG3d2lZrpQAKRCzROBqNgnIEZSrKPVvtZAO5UdkinfcJ2yegZ1RlqdsiKCNZFJZECo0gJKnQMNkzI7IIJ/Ign2NxVMSkQRhJkoJQSQlBARMTcQw2TOF3Meo36qfIzMLI4ow0WCQVs9DfMbLm+1lBleXePloV1whYDb+HLE53w2HieHosZzpT53tyWd+t+qZlZrbklnUgd58AlZbm/O3+fotQ6chboO+x7lJpqewcDy/6UcGykQP0J7vklWsTI49D8k+w+ijh1nW52TjHaEcgtMuiUFA408czfaHZjO3i23HqFa4SQ4hpOh0VVs1jTIKRj3n3WPOX8zstzYBQJNpGZzNFE7s+zLjkDntZIOtrAHTThqo3DvcXmd1qnppCXuBOocW9NDbROxuUAmztDcGzg74g4ZgfIqQxylVoldogNU1GCdB4LbbObOZLSzDXQsjP5eruvRGONyuoWecwnYtmcAy2mlGu9jDw5OcPQLTkJaSQunHGYzUcGWdyu6YliBSRGAnnBITIkBGjRFAJTU7LpwoJGaYLBLYUCESewculNCYzoxInKWkxoCfEgVbnQLitzJnSzzhBVfaFBa5lxNBGkgpQKm0UEq6QCjugFpQSAUq6ABK59/qpMGQBt9XvFxzA1v8lv3lcl/1Uq880cfwtLrcuSzk3h65/a3jp4D7lSYW6G/5Rv6nUpMIBdc7m/NLq3ADKNM9/Ian6JNmW6i3FCCXgm4n3/e9JlbY3G7inSlKc/2u4BOZt/chNQuEYmuC02GhNxfmmA9EF9afCaQVMUbBcdmSXyAn3Sfctu634LoGEFkLQxjQABawFgeawWxtWMpZ1uthE9QyzvJ0Y47xPYjgLXfzKcAH80OgH/Dl3eSg4dhskzsjGku4jdl/UeCuKeosr7C8UDdCB7WpIsCTzPNHGZUXPLGdJGB7Psp7OPtyfF+Vv6R9Vc3RRyBwuDcI10SSTpx5ZW3sLosyMhIITIZckEoEJJCRjJSboIkgNBEiQBlJQKJBg5qTZOJsoAk0+cA2S3OVSXXkRP8ARrcPQVHNXhpIvuQW+OX6Z3FoHJWZMByUCgj7XJajgpxrkA8EYcmrpTUAU71xTbeozVMh4NysHcBddmrHWa48mk/IrhmKfzZ39ZTfw0+ynmr8p6roKdxsACSTc8bE8fBM1ED81yxwABa27SNOp5ldAwfBbNu7Qf8A0VbDD4+Q8dSsTOq35xxwOLeI6C+5PRycx9l1s4TCfyN8godRsvTv/wDWPDQ/Ja5l+P8A25zC+wLfyO3jkoLwWmy6LJsbF+XM3udcfNUmKbHStuYyHj4fdeO6+h7kplCuFUmHymFrJPiLhfqDqOu9bHDMWDwNVT4Zhna00tNI0tcJc7HEasflFtOWjlm2TS078h3tNrcHdQVm48/PW8c+HV8dagqAVNhm6rEYTi2YA81o6aqupbsuqvcdzcaqgxEsO/wWipaxsg0OvJYKKZWFLVlp3q2Obmz+W21uhdVtBiIfo7fzVhdWnbnss9KRFFdEgh2SS1C6F0aBJaislXRFGgSQkEpZKJzUtGbL0kvSjGkOjQDcjtFma+dzHEhaORhVZW0WYd6JdXZ/0w9RiTy4m3FBW02z5JJ1QXT/AMio/iaaB5tqpDHKM1yU1651UvMlNeowkSw5MkgOTjXKM16POgEYvJaGQ/7SPPRcv2aoRI90rheziR+om/p6roW0s+Wnef8AaT5LE7NSWgHV7/kcv0UPrXT8IvXOSe0UN8ybM6jyX4rISpbZVWNmTrJk+Q4rNr7oyAVBZMnmyp7LiOeka4buWvHTcs5jmzjJSC7QEnNI1naOZobHICCRe24hadsqVcFOXV3GcsduZYjTx0YjMcrZWudJHKRmGX3Swlh1aff5+4FZYfXCwc12ZpNgeTvhPX1WsxHCIahuSRgIuXcWnNa17jW6pxsu2K/Zk2OhYdQR3jjyPBPPWX/o+fLDr2JlNU3VjFIslmkp3WeDlvpJwI4X5FXVFVh3FSls9Xyx340FPPZaHD6/gf8ApZKKRTYJ7K+OTmzw22gKF1U4dX8DuVoDdWl25bjod0aQjTIESCSSgDRXRFyK6AO6SURKNBkkJt7UtxSbpAz2QQTt0EaChY4lLuokc4TplQaQNE60qF2109HIgJQdZKzqPnSi5BKrbKW1M/u+hWJ2WqLxOb8EjvJ3tfVanbR14XDkwn56LI7OMtG54/rGN3i0Oafk4eIUfpN7dPy60unvTLnpTimXrmdUOiRLbKod0oPSa0nslTzJlXMenWyJ7Glo2VOMlVbHKE4J1qZM3FZslS+1VUKhOCoT5FxTJo2uFiL3VBU4Y6E54dW7zHy/T9lbfiEkzo3BJYgUWLNdpuO4g3BBVtFPdV72tve2p39UbZAES6Kza7gqrK9w3EuBWL/Ep+lrOSpjmll89ui5r7kd1RYPidxY8Fc3XRLtyZY6pZKSklyK6bJLyhdE4okAd0C5IzI0GBSLoOciBQCroJGZBAYinqg7irCIGyxkU7gQQtdQPJaFk0xjEslJO5HH1TAMupDU2SifLYICi2v/APA88y1vz/wsvscDK2qhGpMbZ2D/AHRuP+AtFthL/JA/3D5XWb/05JFWerHi/wA/oFP+1Z/jtYxS5gCOIBSiirafsJ5IuAdmZ+h3tAeF7eCAXLlNXTsxu5s3I4JrtRzUhzVHlgCTWy2ypwSKCYrKtxXE3QAEAEk2APJamO+oVzkm60YlQ7VZOn2nvo5hHcQVNZj8Z3kjvB+id+eU/oT64X+1/wBoj7ZVcdex25wPinG1IO4j1WdNSxPNQkGqUQypLilo0o1SL8QoZCUAnokxjyVLikDdyro78FZUWETy+7G63xEZW+ZTkt8ZysntWOGVDi6zdS72QFvo9AByACpcAwYU4zO1eePBvQfdXLl1fPGyduH7ZzK9FEorpsORFyoiU5yBKRdAlBgEHuSSUkuQBkororpBcgHLoJvOiQbmGHQ3dbqtNHIGABBBTjVSRPdPRz8EEFtkDvSyL270SCAze3JsxvTMfQLPbAG1UBxAkPkggp/9lp/i0m2seSWKb+oDA79bQXt8xn/tCrmOQQU/tO1fhf4lXROKCCiug11W2NpcViMSqzM8uO7cByCJBdPxk9cv3yu9I8XvDvCmPZp3I0FTJLFKoN7f1Ef3C3qmqF+WQd9iggsftv8AS9hi0kZfUx9ow8nMOo8QVpNjnh8kQIv/ADBcEAizmHf4tKCCWBZuiOo4v6bP7W/ZG2ji/pM/sb9kSCsieEbW7mgdwATmbREggE5kGvugggDck3QQQBuKRmQQQYyU0XWQQQBnVNuKCCAMIIIIN//Z" alt="">
                            </div>
                            <div class="info">
                                <div class="info">
                                    <p class="name">
                                        Zineb_essoussi
                                        <span class="desc">liked your story.</span>
                                        <span class="time">2d</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="story_like">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0y7IMZdn0mMlGwIQ2o31Lo6jD6YGxfq6pWA&s" alt="">
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8njCqdQOIWLHTEtxow1MnCexsakC94YZVCw&s" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif story_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="info">
                                <div class="info">
                                    <p class="name">
                                        Zineb_essoussi
                                        <span class="desc">liked your story.</span>
                                        <span class="time">2d</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="story_like">
                            <img src="./images/img2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="https://pt.quizur.com/_image?href=https%3A%2F%2Fimg.quizur.com%2Ff%2Fimg6420b18d5eeda9.44283087.jpg%3FlastEdited%3D1679864209&w=400&h=400&f=webp" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--***** nav menu end ****** -->

        @yield('conteudo')
         <!-- <script src="./sass/vender/bootstrap.bundle.js"></script>
    <script src="./sass/vender/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="./owlcarousel/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>