clc;
clear;
close all;
pkg load image
pkg load signal
% Read image
img = imread('img1.jpg');
% Convert to grayscale
gray = rgb2gray(img);
% Resize to make processing faster
gray = imresize(gray,[128 128]);
% DCT compression
D = dct2(double(gray));
% Keep important coefficients
D(31:end,:) = 0;
D(:,31:end) = 0;
% Reconstruct image
compressed = idct2 (D);
% Display
subplot(1,2,1);
imshow(gray);
title('Original Image');
subplot(1,2,2);
imshow(uint8(compressed));
title('Compressed Image');