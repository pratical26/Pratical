clc;
clear;
close all;
% Read input image
I = imread('img1.jpg');
% Convert RGB image to grayscale 
if size(I,3) == 3
Igray = rgb2gray(I);
else
Igray = I;
end
% Convert image to double
Igray = im2double(Igray);
% Sobel gradient masks
Gx = [-1 0 1;
     -2 0 2;
     -1 0 1];
Gy = [-1 -2 -1;
       0 0 0;
       1 2 1];
% Calculate gradients
Ix = imfilter(Igray, Gx, 'replicate');
Iy = imfilter(Igray, Gy, 'replicate');
% Calculate gradient magnitude
G = sqrt(Ix.^2 + Iy.^2);
% Normalize gradient
G = mat2gray(G);
% Sharpen image using gradient
alpha = 1.0;
Sharpened = Igray + alpha * G;
% Limit intensity values to [0,1]
Sharpened = min(max(Sharpened,0),1);
% Display results
figure;
subplot(2,2,1)
imshow(Igray);
title('Original Grayscale Image');
subplot(2,2,2);
imshow(Ix,[]);
title('Gradient in X Direction');
subplot(2,2,3);
imshow(G,[]);
title('Gradient Magnitude');
subplot(2,2,4);
imshow(Sharpened);
title('Sharpened Image');