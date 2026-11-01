clc;
clear;
close all;
f = imread('img1.jpg');
se = strel('square', 20);
fo = imopen(f, se);
figure,
imshow(f)
title('Input image');
figure,
imshow(fo)
title('Opening of input image');
fc = imclose(f, se);
figure,
imshow(fc)
title('Opening of input image');
foc = imclose(fo, se);
figure,
imshow(foc) 
title('Closing of opened image');