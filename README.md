<img src="https://media4.giphy.com/media/26n6ziTEeDDbowBkQ/giphy.gif?cid=ecf05e4752a2dmevvyzp0y046sfwiyf3uuljt4aifjd3gqiz&rid=giphy.gif" width="100%">

# Fake-news
The assignment was to create a news feed consisting of fake articles.

## Built With
- PHP
- HTML
- CSS


## Installation
Clone the repository to your computer
 ```
$ git clone https://github.com/carolinahagman/Fake-news.git
 ```
Start a local server in the command line
 ```
 $ php -S localhost:8000
 ```
Open the index.php file in your browser

## Testers
- [Amanda Fager](https://github.com/amandafager)
- [Ida From](https://github.com/Fvrom)

## Code Review by [Victor Stranne](https://github.com/vstranne)
- functions.php - Your functions has good descriptive names but you could be more consistent with commenting what all of them actually do, only some of them are commented as of now. Also, if you make abit more complex functions in the future then perhaps do some commenting inside of them aswell and explain what's actually happening in there.
- index.php:10-15 - Here you are converting an array into single variables, my guess is you do this to increase readability. In this case I don't think it actually adds much, echo $title could've been written echo $post['title'] for just the same readability. I feel converting the array to single variables would be more beneficial incase you'd have to use concatination due to just using the array to print.
- functions.php:28-38 - The function postedDateToString is a great feature on your site, but it only seem to return values in days ago, perhaps add functionality to make it say X months ago, or last year/X years ago for older articles.
- There are some empty rows in some of the files, mainly index.php and article.php, that doesn't really contribute to anything, perhaps consider removing them and make the code more compact and better looking ;)
- You have great structure in your entire repository and it's very easy to navigate through it, great job!

I just wanted to add that I really liked your version of the Fake-News project, the design is really great and you've added alot of cool features to it! It was really difficult to find anything to give constructive feedback because all in all you've done a fantastic job. For future designs perhaps add a really awesome footer.php?


## License
This project is licensed under the MIT License - see the LICENSE file for details
